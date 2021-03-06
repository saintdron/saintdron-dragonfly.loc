<?php

namespace App\Http\Controllers;

use App\Repositories\ServiceRepository;
use App\Repositories\SiteRepository;
use App\Repositories\WebAnimationRepository;
use App\WebAnimation;
use Illuminate\Http\Request;

class WebDevelopmentController extends SiteController
{
    public function __construct(SiteRepository $si_rep, ServiceRepository $se_rep, WebAnimationRepository $wa_rep)
    {
        $this->title = 'Веб-разработка';
        $this->template = 'common';
        $this->nav_position = 'right-bottom';

        $this->si_rep = $si_rep;
        $this->se_rep = $se_rep;
        $this->wa_rep = $wa_rep;
    }

    public function sites(Request $request, $alias = false)
    {
        $this->partition = 'sites';
        $this->partitions_view = $this->getPartitionsView();

        try {
            $works = $this->getSites();
            if ($works->isEmpty()) {
                $content_view = $this->setError('Не удалось найти ни одной работы');
            } else {
                if ($alias) {
                    $work = $this->getSite($alias);
                    if (!$work) {
                        $content_view = $this->setError('Не удалось найти указанную работу');
                    } else {
                        $this->title = $work->title;

                        // Определение порядкового номера выбранной работы
                        $k = $works->search(function ($item) use ($work) {
                            return $item->alias === $work->alias;
                        });
                        // Добавление псевдонимов предыдущей и слудующей работ
                        $work->prev = ($k === 0) ? $works[count($works) - 1]->alias : $works[$k - 1]->alias;
                        $work->next = ($k === count($works) - 1) ? $works[0]->alias : $works[$k + 1]->alias;

                        $content_view = view($this->partition . '.' . $work->alias)
                            ->with(['title' => $this->title, 'partitions_view' => $this->partitions_view, 'work' => $work])
                            ->render();
                    }
                } else {
                    $content_view = view($this->partition . '_content')
                        ->with(['title' => $this->title, 'partitions_view' => $this->partitions_view, 'works' => $works])
                        ->render();
                }
            }
        } catch (\Exception $exception) {
            report($exception);
            $content_view = $this->setError();
        }

        if ($request->isMethod('post')) {
            return response()->json($content_view);
        }

        $this->vars = array_add($this->vars, 'content_view', $content_view);
        return $this->renderOutput();
    }

    public function services(Request $request, $alias = false)
    {
        $this->partition = 'services';
        $this->partitions_view = $this->getPartitionsView();

        try {
            if ($alias) {
                $work = $this->getService($alias);
                if (!$work) {
                    $content_view = $this->setError('Не удалось найти указанный сервис');
                } else {
                    $this->title = $work->title;
                    $content_view = view($this->partition . '.' . $work->alias)
                        ->with(['title' => $this->title, 'partitions_view' => $this->partitions_view, 'work' => $work])
                        ->render();
                }
            } else {
                $works = $this->getServices();
                if ($works->isEmpty()) {
                    $content_view = $this->setError('Не удалось найти ни одной работы');
                } else {
                    $content_view = view($this->partition . '_content')
                        ->with(['title' => $this->title, 'partitions_view' => $this->partitions_view, 'works' => $works])
                        ->render();
                }
            }
        } catch (\Exception $exception) {
            report($exception);
            $content_view = $this->setError();
        }


        if ($request->isMethod('post')) {
            return response()->json($content_view);
        }

        $this->vars = array_add($this->vars, 'content_view', $content_view);
        return $this->renderOutput();
    }

    public function webAnimations(Request $request, $alias = false)
    {
        $this->partition = 'webAnimations';
        $this->partitions_view = $this->getPartitionsView();

        try {
            $works = $this->getWebAnimations();
            if ($works->isEmpty()) {
                $content_view = $this->setError('Не удалось найти ни одной работы');
            } else {
                $selected = $alias ? $this->getWebAnimation($alias) : $this->getWebAnimation($works[0]->alias);
                $selected = $selected ?: $this->getWebAnimation($works[0]->alias);
                $content_view = $this->formContent($works, $selected);
            }
        } catch (\Exception $exception) {
            report($exception);
            $content_view = $this->setError();
        }

        if ($request->isMethod('post')) {
            return response()->json($content_view);
        }

        $this->vars = array_add($this->vars, 'content_view', $content_view);
        return $this->renderOutput();
    }

    protected function getPartitionsView()
    {
        session(['webDevelopmentLast' => $this->partition]);
        return view('webDevelopmentPartitions_content')
            ->with(['partition' => $this->partition])
            ->render();
    }

    protected function formContent($works, $selected)
    {
        // Определение порядкового номера выбранной работы
        $k = $works->search(function ($item) use ($selected) {
            return $item->alias === $selected->alias;
        });
        $selected->prev = ($k === 0) ? $works[count($works) - 1] : $works[$k - 1];
        $selected->next = ($k === count($works) - 1) ? $works[0] : $works[$k + 1];

        return view($this->partition . '_content')
            ->with(['title' => $this->title, 'partitions_view' => $this->partitions_view, 'selected' => $selected, 'works' => $works])
            ->render();
    }

    protected function getSites()
    {
        return $this->si_rep->get(['img', 'title', 'alias']);
    }

    protected function getSite($alias)
    {
        return $this->si_rep->one($alias, ['img', 'title', 'alias', 'text', 'customer', 'techs', 'created_at', 'live_version']);
    }

    protected function getServices()
    {
        return $this->se_rep->get(['img', 'title', 'alias']);
    }

    protected function getService($alias)
    {
        return $this->se_rep->one($alias, ['img', 'title', 'alias', 'text', 'customer', 'techs', 'created_at']);
    }

    protected function getWebAnimations()
    {
        return $this->wa_rep->get(['img', 'title', 'alias']);
    }

    protected function getWebAnimation($alias)
    {
        return $this->wa_rep->one($alias, ['img', 'script', 'title', 'alias', 'text', 'customer', 'techs', 'created_at']);
    }
}

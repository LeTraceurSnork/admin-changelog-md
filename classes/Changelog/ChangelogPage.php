<?php

declare(strict_types=1);

namespace SpectrumData\Plugin\Changelog;

use Parsedown;

class ChangelogPage
{
    private Parsedown $parsedown_class;

    public function __construct()
    {
        $this->parsedown_class = new Parsedown();
    }

    /**
     * Выводит на экран HTML-разметку для страницы CHANGELOG в админ-панели WP
     *
     * @return void
     */
    public function showChangelogPage(): void
    {
        echo '<div class="page--changelog">' . $this->parsedown_class->text(file_get_contents(ABSPATH . "CHANGELOG.md")) . '</div>';
    }
}

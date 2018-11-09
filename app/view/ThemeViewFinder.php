<?php

namespace Sunday\View;
use Illuminate\view\FileViewFinder;


class ThemeViewFinder extends FileViewFinder
{
    protected $activeTheme;
    protected $basePath;

    public function setBasePath($path)
    {
        $this->basePath=$path;
    }
    public function setActiveTheme($theme)
    {
        $this->activeTheme=$theme;

        array_unshift($this->paths, $this->basePath.'/'.$theme.'/views');

    }
}
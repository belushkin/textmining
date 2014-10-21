<?php

namespace Application\Model;


class Directory
{

    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function create()
    {
        if (!mkdir($this->path, 0700)) {
            throw new \RuntimeException("You can't create directory for some reason!");
        }
    }

    public function delete()
    {
        if (is_dir($this->path)) {
            $objects = scandir($this->path);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($this->path."/".$object) == "dir") rrmdir($this->path."/".$object); else unlink($this->path."/".$object);
                }
            }
            reset($objects);
            rmdir($this->path);
        }
    }

    public function getPath()
    {
        return $this->path;
    }

}

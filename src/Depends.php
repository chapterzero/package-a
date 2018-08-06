<?php
namespace PackageA;

class Depends
{
    private $cLib;

    public function __construct(PackageCLib $cLib)
    {
        $this->cLib = $cLib;
    }

    public function methodThatRequireC()
    {
        return $this->cLib->hashMe('something') . '_added';
    }
}

<?php

namespace Webt\MedtCore1Review;

interface AttractionInterface
{
    public function getName() : string;

    public function getFee() : array;

    public function getDescription() : string;
}
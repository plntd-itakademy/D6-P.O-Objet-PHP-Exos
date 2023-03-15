<?php

interface BanqueInterface
{
    public function retirerArgent($montant): mixed;
    public function deposerArgent($montant): float;
}

@extends('layouts.index')
<x-index>
    <x-slot name="header">
        <x-nav-index />
    </x-slot>


    <x-body-index :persons="$persons">
        <x-sidebar-index />




    </x-body-index>
</x-index>

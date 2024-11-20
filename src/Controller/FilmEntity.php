<?php

namespace App\Controller;

class FilmEntity
{
    
    private int $id;
    private string $title;
    private string $year;
    private string $genre;
    private string $synopsis; 
    private string $director; 
    private string $deleted_at; 
    private string $created_at;

    
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }
}

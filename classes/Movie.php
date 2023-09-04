<?php 
class Movie
{
    // ATTRIBUTI
    private $title;
    private $genres = [];
    private $actors = [];
    private $language;
    private $img;
    private $plot;
    private $active;

    // COSTRUTTORE
    public function __construct(
        string $_title,
        array $_genres = [],
        array $_actors = [],
        string $_language = '',
        string $_img = '',
        string $_plot = ''
    ) {
        $this->setTitle($_title);
        $this->setGenres($_genres);
        $this->setActors($_actors);
        $this->setLanguage($_language);
        $this->setImg($_img);
        $this->setPlot($_plot);
        
    }

    // METODI GETTER
    public function getTitle()
    {
        return $this->title;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    // METODI SETTER
    public function setTitle(string $title)
    {
        if (!empty($title)) {
            $this->title = $title;
        } else {
            throw new InvalidArgumentException('Il titolo non può essere vuoto.');
        }
    }

    public function setGenres(array $genres)
    {
        $this->genres = $genres;
    }

    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function setImg(string $img)
    {
        $this->img = $img;
    }

    public function setPlot(string $plot)
    {
        $this->plot = $plot;
    }

    // METODI
    public function addGenre(string $genre)
    {
        if (!in_array($genre, $this->genres)) {
            $this->genres[] = $genre;
        }
    }
}

<?php

class Cards
{
    private string $nome;
    private string $descricao;
    private $link;
    private int $evolucao;
    private $tipo1;
    private $tipo2;

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of evolucao
     */
    public function getEvolucao(): int
    {
        return $this->evolucao;
    }

    /**
     * Set the value of evolucao
     */
    public function setEvolucao(int $evolucao): self
    {
        $this->evolucao = $evolucao;

        return $this;
    }

    /**
     * Get the value of tipo1
     */
    public function getTipo1()
    {
        return $this->tipo1;
    }

    /**
     * Set the value of tipo1
     */
    public function setTipo1($tipo1): self
    {
        $this->tipo1 = $tipo1;

        return $this;
    }

    /**
     * Get the value of tipo2
     */
    public function getTipo2()
    {
        return $this->tipo2;
    }

    /**
     * Set the value of tipo2
     */
    public function setTipo2($tipo2): self
    {
        $this->tipo2 = $tipo2;

        return $this;
    }
    public function getVerificaTipo1()
    {
        if ($this->getTipo1() == 'No') {
            return "https://ih1.redbubble.net/image.4810549878.0710/st,small,507x507-pad,600x600,f8f8f8.u2.jpg";
        } else if ($this->getTipo1() == 'Fo') {
            return  "https://pm1.aminoapps.com/6712/a5a401797e0d625d7548d309752d746fb65aecdf_hq.jpg";
        } else if ($this->getTipo1() == 'Ag') {
            return "https://pm1.aminoapps.com/6713/c4c80954a8bd3f66a6e8315ba4675d512385fe30_hq.jpg";
        } elseif ($this->getTipo1() == 'El') {
            return "https://preview.redd.it/any-electric-type-team-member-suggestions-v0-90tvkiywtaqd1.jpeg?auto=webp&s=3711de2583b3b6f87e39fadae7d06faebb241bf4";
        } elseif ($this->getTipo1() == 'Gr') {
            return "https://pm1.aminoapps.com/6714/113c21b97a14ba222df9023c8b4445e8810d66a3_00.jpg";
        } elseif ($this->getTipo1() == 'Ge') {
            return "https://gmatheus-spinardi.e.usp.br/pokemonbasics/images/ice.png";
        } elseif ($this->getTipo1() == 'Lu') {
            return "https://e7.pngegg.com/pngimages/374/734/png-clipart-pokemon-types-pokemon-trading-card-game-video-symbol-blue-fire-dragon-orange-logo-thumbnail.png";
        } elseif ($this->getTipo1() == 'Ve') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMRlzpcnnOeioHCxSvKyMcIQhRmqcFwBYB6Q&s";
        } elseif ($this->getTipo1() == 'Te') {
            return "https://lh3.googleusercontent.com/I6GqXVWkjogiio0bfV-0oAq7A1Q6F2bjgfmOWtFywq3HYkqUvJRHR7iomaNkt8FJ_Y9KzLecLNQMX6gkhOTvDuJSU53-4rxeUb0CjlcTF_F4";
        } elseif ($this->getTipo1() == 'Vo') {
            return "https://pm1.aminoapps.com/8909/4c035de5157c3bdad1f2233ede3979154e393a7cr1-1280-1280v2_00.jpg";
        } elseif ($this->getTipo1() == 'Ps') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiNP0YQSqcvQNc6VJ57ex8YVAdJrCw1ekvcMgqQ33F0bNIM37ERR1zSUxdVijed5k1NNY&usqp=CAU";
        } elseif ($this->getTipo1() == 'In') {
            return "https://gmatheus-spinardi.e.usp.br/pokemonbasics/images/bug.png";
        } elseif ($this->getTipo1() == 'Fa') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQczzD5zkTgKpBQlMkN0XAP0lPc7WQEYL7dEA&s";
        } elseif ($this->getTipo1() == 'Dr') {
            return "https://external-preview.redd.it/UpDRyZ7vYVzZmE_RjT6LYhGdt5xAuI8emwue3ol83zQ.jpg?auto=webp&s=1ea88b2ee8a47053b4e8ff17a2b54b5a95dfd811";
        } elseif ($this->getTipo1() == 'Me') {
            return "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e8ddc4da-23dd-4502-b65b-378c9cfe5efa/dfgddcz-06a632af-8eb8-41e3-8468-dcc0eb9886f4.png/v1/fill/w_1280,h_1280/metal_type_symbol_tcg_by_jormxdos_dfgddcz-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MCIsInBhdGgiOiJcL2ZcL2U4ZGRjNGRhLTIzZGQtNDUwMi1iNjViLTM3OGM5Y2ZlNWVmYVwvZGZnZGRjei0wNmE2MzJhZi04ZWI4LTQxZTMtODQ2OC1kY2MwZWI5ODg2ZjQucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.TvVirKp3SOiBkZgrJvZb0iKASIOy66c7mdKnZ3aBPTA";
        }
    }
    public function getVerificaTipo2()
    {
        if ($this->getTipo1() == 'No') {
            return "https://ih1.redbubble.net/image.4810549878.0710/st,small,507x507-pad,600x600,f8f8f8.u2.jpg";
        } else if ($this->getTipo2() == 'Fo') {
            return  "https://pm1.aminoapps.com/6712/a5a401797e0d625d7548d309752d746fb65aecdf_hq.jpg";
        } else if ($this->getTipo2() == 'Ag') {
            return "https://pm1.aminoapps.com/6713/c4c80954a8bd3f66a6e8315ba4675d512385fe30_hq.jpg";
        } elseif ($this->getTipo2() == 'El') {
            return "https://preview.redd.it/any-electric-type-team-member-suggestions-v0-90tvkiywtaqd1.jpeg?auto=webp&s=3711de2583b3b6f87e39fadae7d06faebb241bf4";
        } elseif ($this->getTipo2() == 'Gr') {
            return "https://pm1.aminoapps.com/6714/113c21b97a14ba222df9023c8b4445e8810d66a3_00.jpg";
        } elseif ($this->getTipo2() == 'Ge') {
            return "https://gmatheus-spinardi.e.usp.br/pokemonbasics/images/ice.png";
        } elseif ($this->getTipo2() == 'Lu') {
            return "https://e7.pngegg.com/pngimages/374/734/png-clipart-pokemon-types-pokemon-trading-card-game-video-symbol-blue-fire-dragon-orange-logo-thumbnail.png";
        } elseif ($this->getTipo2() == 'Ve') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMRlzpcnnOeioHCxSvKyMcIQhRmqcFwBYB6Q&s";
        } elseif ($this->getTipo2() == 'Te') {
            return "https://lh3.googleusercontent.com/I6GqXVWkjogiio0bfV-0oAq7A1Q6F2bjgfmOWtFywq3HYkqUvJRHR7iomaNkt8FJ_Y9KzLecLNQMX6gkhOTvDuJSU53-4rxeUb0CjlcTF_F4";
        } elseif ($this->getTipo2() == 'Vo') {
            return "https://pm1.aminoapps.com/8909/4c035de5157c3bdad1f2233ede3979154e393a7cr1-1280-1280v2_00.jpg";
        } elseif ($this->getTipo2() == 'Ps') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiNP0YQSqcvQNc6VJ57ex8YVAdJrCw1ekvcMgqQ33F0bNIM37ERR1zSUxdVijed5k1NNY&usqp=CAU";
        } elseif ($this->getTipo2() == 'In') {
            return "https://gmatheus-spinardi.e.usp.br/pokemonbasics/images/bug.png";
        } elseif ($this->getTipo2() == 'Fa') {
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQczzD5zkTgKpBQlMkN0XAP0lPc7WQEYL7dEA&s";
        } elseif ($this->getTipo2() == 'Dr') {
            return "https://external-preview.redd.it/UpDRyZ7vYVzZmE_RjT6LYhGdt5xAuI8emwue3ol83zQ.jpg?auto=webp&s=1ea88b2ee8a47053b4e8ff17a2b54b5a95dfd811";
        } elseif ($this->getTipo2() == 'Me') {
            return "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e8ddc4da-23dd-4502-b65b-378c9cfe5efa/dfgddcz-06a632af-8eb8-41e3-8468-dcc0eb9886f4.png/v1/fill/w_1280,h_1280/metal_type_symbol_tcg_by_jormxdos_dfgddcz-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MCIsInBhdGgiOiJcL2ZcL2U4ZGRjNGRhLTIzZGQtNDUwMi1iNjViLTM3OGM5Y2ZlNWVmYVwvZGZnZGRjei0wNmE2MzJhZi04ZWI4LTQxZTMtODQ2OC1kY2MwZWI5ODg2ZjQucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.TvVirKp3SOiBkZgrJvZb0iKASIOy66c7mdKnZ3aBPTA";
        } else {
            return "https://w7.pngwing.com/pngs/380/139/png-transparent-x-red-mark-incorrect-thumbnail.png";
        }
    }
    public function getGeraCard()
    {
        echo "<div class='d-flex justfy-content-center align-items-center vh-100'>";
        echo "<h1 class='h3 mb-3 fw-normal'>Pokémon Informado</h1><br>";

        echo "<div class=''style='border: solid 1px; width: 300px; margin-top: 20px;'>";
        echo "Pokémon: " . $this->getNome() . "<br>";
        echo "Descrição: " . $this->getDescricao() . "<br>";
        echo "Fase evolutíva: " . $this->getEvolucao() . "<br>";
        echo "Tipo 1: <img style='width='70' height='70';  src='" . $this->getVerificaTipo1() . "' />";
        echo "Tipo 2: <img style='width='70' height='70'; src='" . $this->getVerificaTipo2() . "' /><br>";
        echo "<img style='width: 100%; height: auto;' src='" . $this->getLink() . "' /><br>";
        echo "</div>";
        echo "</div>";

        echo "<br><br>";
        echo "<a href='filme_formulario.php' style = 'color: cadetblue;'>Cadastrar outro Pokémon</a>";
    }
}

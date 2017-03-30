<?php

//1
class Piece{

    protected $type = null;
    protected static $images = array(
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    );

    //2
    public function __construct($type)
        {
            $type->type = $type;
        }


        //3
    public function __toString()
        {
            return '<img src="' . static::$images[ $this->type ].'" />';   
 
            // same as  return '<img src="http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png" />';
        }

}



    //4

class Field{

    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    //5
    public function __construct($x, $y, $piece= null)
        {
            $this->x_coord = $x;
            $this->y_coord = $y;
            $this->piece = $piece;

        }

        public function isDark()
        {
            if($this->x_coord % 2 == $this->y_coord % 2)
            {
                return true;
            }
            else{
                return false;
            }
        }

        public function __toString()
        {
          $class = $this->isDark() ?'dark':'light';
          if()
          
          return'<div class="' . $class . '">' . $this->piece . '</div>';
        }


}

$black_pawn = new piece('p');
$white_queen = new piece('Q');

echo $black_pawn;
echo $white_queen;

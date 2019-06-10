<?php
    class Vehiculo
    {
        private $position = 0;

        public function avanzar( int $velocidad )
        {
            if ( $velocidad < 0 || $velocidad > 200 ) {
                throw new OutOfBoundsException();
            }

            $this->position += $velocidad;
        }
    }

    class Scooter extends Vehiculo
    {
        public function avanzar( int $velocidad )
        {
            if ( $velocidad > 100 ) {
                throw new OutOfBoundsException();
            }
        }
    }
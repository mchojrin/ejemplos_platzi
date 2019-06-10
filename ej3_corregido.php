<?php
    for ($i = 0; $i < $total; $i++) {
        imprimrRegistro();
    }
    
    function imprimrRegistro()
    {
        $rows = oci_fetch_array($rss, OCI_NUM);
        $horario = $rows[6];

        $empl_num = str_replace("?", 'Ñ', $rows[0]);
        $nombre = str_replace("?", 'Ñ', $rows[1]);
        $apaterno = str_replace("?", 'Ñ', $rows[2]);
        $amaterno = str_replace("?", 'Ñ', $rows[3]);
        $fecha = str_replace("?", 'Ñ', $rows[4]);

        $trabajo = '14:00:00';

        list($horae, $horas) = calcularHorario($rows, $trabajo);

        $horae = str_replace("?", 'Ñ', $horae);
        $horas = str_replace("?", 'Ñ', $horas);
        $horario = str_replace("?", 'Ñ', $horario);

        echo "$empl_num, $nombre, $apaterno, $amaterno, $fecha, $horae, $horas, $horario".PHP_EOL;
    }

    /**
     * @param array $rows
     * @param string $trabajo
     * @return array
     */
    function calcularHorario(array $rows, string $trabajo): array
    {
        if ($rows[5] < $trabajo) {
            $horaentrada = $rows[5];
            $horae = $horaentrada;
            $horas = '00:00:00';
        } else {
            $horasalida = $rows[5];
            $horae = '00:00:00';
            $horas = $horasalida;
        }

        return array($horae, $horas);
    }
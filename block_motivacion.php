<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Bloque de frase motivacional del día.
 *
 * @package   block_motivacion
 * @copyright 2026, Chapter Data
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_motivacion extends block_base {

    /**
     * Inicializa el bloque con su título.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_motivacion');
    }

    /**
     * Genera y devuelve el contenido HTML del bloque.
     */
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->footer = '';

        // Lista de frases motivacionales sobre programación y aprendizaje
        $frases = [
            "El código que escribes hoy es la experiencia que tendrás mañana.",
            "Todo experto fue una vez un principiante. ¡Sigue adelante!",
            "Los errores no son fallos, son oportunidades de aprendizaje.",
            "Un buen programador no es el que lo sabe todo, sino el que sabe buscar.",
            "La constancia es la clave del éxito en programación.",
            "Cada línea de código te acerca más a tu objetivo.",
            "La mejor forma de aprender a programar es programando.",
            "Los bugs de hoy son las lecciones de mañana.",
            "No cuentes los días, haz que los días cuenten... ¡y que compilen!",
            "El único modo de hacer un gran trabajo es amar lo que haces.",
            "Primero hazlo funcionar, luego hazlo bien, luego hazlo rápido.",
            "El aprendizaje nunca agota la mente. ¡Tú puedes!",
            "Cada problema tiene una solución, solo hay que encontrarla.",
            "Hoy es un buen día para aprender algo nuevo.",
            "La programación es el arte de resolver problemas creativamente.",
        ];

        // Obtener el índice de la frase desde la URL, o uno aleatorio por defecto
        $indice = optional_param('frase_idx', rand(0, count($frases) - 1), PARAM_INT);

        // Asegurarse de que el índice esté en rango válido
        if ($indice < 0 || $indice >= count($frases)) {
            $indice = 0;
        }

        $frase_actual = $frases[$indice];

        // Calcular un índice aleatorio diferente al actual para el botón
        do {
            $nuevo_indice = rand(0, count($frases) - 1);
        } while ($nuevo_indice === $indice);

        // Construir la URL de la página actual con el nuevo índice
        $url_actual = new moodle_url($this->page->url, ['frase_idx' => $nuevo_indice]);

        // Construir el HTML del bloque
        $html  = '<div style="text-align:center; padding: 8px;">';
        $html .= '<p style="font-size:1em; font-style:italic; color:#333; margin-bottom:12px;">';
        $html .= '💡 ' . format_string($frase_actual);
        $html .= '</p>';
        $html .= '<a href="' . $url_actual->out() . '" class="btn btn-primary btn-sm">';
        $html .= '🔄 ' . get_string('nuevafrase', 'block_motivacion');
        $html .= '</a>';
        $html .= '</div>';

        $this->content->text = $html;

        return $this->content;
    }

    /**
     * Define en qué páginas puede aparecer el bloque.
     */
    public function applicable_formats() {
        return [
            'admin'       => false,
            'site-index'  => true,
            'course-view' => true,
            'mod'         => true,
            'my'          => true,
        ];
    }
}

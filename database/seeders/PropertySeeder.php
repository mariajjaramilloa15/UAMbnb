<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'name' => 'Apartamento en Arriendo Manizales',
            'descripcion' => 'Iluminado apartamento, segundo piso, ascensor, vista exterior, sala-comedor, dos alcobas, estudio, garaje cubierto independiente, conjunto parque infantil, salón comunal, cerca a centro comercial.',
            'area' => 79,
            'precio' => 12000000,
            'caracteristicas' => 'Calentador a gas, Cocina Integral, Garaje Independiente, Iluminación natural,
            Sala-Comedor, Vista exterior, Zona de ropas, Ascensor, En conjunto cerrado, Garaje Cubierto,
            Portería/Vigilancia, Salón Comunal, Zona Infantil, Zona Comercial y universitaria, Zona Residencial',
            'comentarios' => 'Esta muy bien ubicado, es muy bonito!',
            'likes' => 12,
            'user_id' => 1
        ]);

        Property::create([
            'name' => 'Apartaestudio en Arriendo Manizales ',
            'descripcion' => 'Iluminado apartaestudio, tercer piso, ascensor, vista exterior, sala-comedor, 1 alcoba, estudio, garaje cubierto independiente, salón comunal, cerca a la universidad de Manizales.',
            'area' => 55,
            'precio' => 1150000,
            'caracteristicas' => 'Calentador a gas, Garaje Independiente, Iluminación natural,
            Sala-Comedor, Vista exterior, Zona de ropas, Ascensor, En conjunto cerrado, Garaje Cubierto,
            Portería/Vigilancia, Salón Comunal, Zona universitaria, Zona Residencial',
            'comentarios' => 'Es ideal para un estudiante universitario, comodo y lindo.',
            'likes' => 10,
            'user_id' => 2
        ]);

        Property::create([
            'name' => 'Apartaestudio en Arriendo Manizales',
            'descripcion' => 'Iluminado apartaestudio, Quinto piso, ascensor, vista exterior, sala-comedor, 1 alcoba, estudio, garaje cubierto independiente, salón comunal, cerca a la universidad Autonoma.',
            'area' => 12,
            'precio' => 1500000,
            'caracteristicas' => 'Calentador a gas, Cocina Integral, Garaje Independiente, Iluminación natural,
            Sala-Comedor, Vista exterior, Zona de ropas, Ascensor, En conjunto cerrado, Garaje Cubierto,
            Portería/Vigilancia, Salón Comunal, Zona universitaria, Zona Residencial',
            'comentarios' => 'Es muy bonito, comodo e ideal para estudiantes',
            'likes' => 18,
            'user_id' => 3
        ]);

        Property::create([
            'name' => 'Apartamento en Arriendo en Manizales',
            'descripcion' => 'Iluminado apartamento en Palermo, cuarto piso, ascensor, vista exterior, sala-comedor, tres alcobas, estudio, garaje cubierto independiente, conjunto parque infantil, salón comunal, cerca a centro comercial Sancancio.',
            'area' => 89,
            'precio' => 2300000,
            'caracteristicas' => 'Calentador a gas, Cocina Integral, Garaje Independiente, Iluminación natural,
            Sala-Comedor, Vista exterior, Zona de ropas, Ascensor, En conjunto cerrado, Garaje Cubierto,
            Portería/Vigilancia, Salón Comunal, Zona Infantil, Zona Comercial, Zona Residencial',
            'comentarios' => 'Apartamento grande y bonito, bien ubicado',
            'likes' => 16,
            'user_id' => 4
        ]);

    }
}
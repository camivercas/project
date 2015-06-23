<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CampusTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 3; $i++)
        {
            $created = $faker->dateTimeThisYear;

            $id_r = \DB::table('roles')->insertGetId([
                'nombre'        => $faker->unique()->randomElement($array = array('Administrador','Encargado Campus','Estudiante','Docente')),
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            \DB::table('roles_usuarios')->insert([
                'rut'   => $faker->numberBetween($min = 90000000, $max = 249999999),
                'rol_id'=> $id_r,
                'created_at' => $created,
                'updated_at' => $created
            ]);

            $id = \DB::table('campus')->insertGetId([
                'nombre'        => $faker->unique()->randomElement($array = array('Macul','Providencia','Area Central')),
                'direccion'     => $faker->address,
                'latitud'       => $faker->latitude,
                'longitud'      => $faker->longitude,
                'descripcion'   => $faker->sentence($nbWords = 6),
                'rut_encargado' => $faker->numberBetween($min = 90000000, $max = 249999999),
                'created_at'    => $created,
                'updated_at'    => $created

            ]);

            $id_a = \DB::table('facultades')->insertGetId([
                'nombre'        => $faker->unique()->randomElement($array = array('Administracion','Cs Construccion','Cs Naturales','Humanidades','Ingenieria')),
                'campus_id'     => $id,
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_b = \DB::table('departamentos')->insertGetId([
                'nombre'        => $faker->unique()->randomElement($array = array('Info y Compu','Industria','Electricidad','Mecanica')),
                'facultad_id'   => $id_a,
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_c = \DB::table('escuelas')->insertGetId([
                'nombre'            => $faker->unique()->randomElement($array = array('Info','Industria','Electronica','Mecanica')),
                'departamento_id'   => $id_b,
                'descripcion'       => $faker->sentence($nbWords = 6),
                'created_at'        => $created,
                'updated_at'        => $created
            ]);

            $id_d = \DB::table('carreras')->insertGetId([
                'escuela_id'    => $id_c,
                'codigo'        => $faker->numberBetween($min = 20000,$max=22000),
                'nombre'        => $faker->unique()->randomElement($array=array('Ing Civil Compu','Ing Civil Ind','Bachillerato','Arquitectura')),
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            \DB::table('funcionarios')->insert([
                'departamento_id'   => $id_b,
                'rut'               => $faker->numberBetween($min = 90000000, $max = 249999999),
                'nombres'           => $faker->firstName,
                'apellidos'         => $faker->lastName,
                'created_at'        => $created,
                'updated_at'        => $created
            ]);

            $id_g = \DB::table('docentes')->insertGetId([
                'departamento_id'   => $id_b,
                'rut'               => $faker->numberBetween($min = 90000000, $max = 249999999),
                'nombres'           => $faker->firstName,
                'apellidos'         => $faker->lastName,
                'created_at'        => $created,
                'updated_at'        => $created
            ]);

            $id_i = \DB::table('estudiantes')->insertGetId([
                'carrera_id'    => $id_d,
                'rut'           => $faker->numberBetween($min = 90000000, $max = 249999999),
                'nombres'       => $faker->firstName,
                'apellidos'     => $faker->lastName,
                'email'         => $faker->freeEmail,
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_f = \DB::table('asignaturas')->insertGetId([
                'departamento_id'   => $id_b,
                'codigo'            => $faker->bothify('???###'),
                'nombre'            => $faker->unique()->randomElement($array=array('Calculo','Software','Fisica','Algebra')),
                'descripcion'       => $faker->sentence($nbWords = 6),
                'created_at'        => $created,
                'updated_at'        => $created
            ]);

            $id_e = \DB::table('tipos_salas')->insertGetId([
                'nombre'        => $faker->unique()->randomElement($array=array('normal','laboratorio','centro alumnos')),
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_j = \DB::table('salas')->insertGetId([
                'campus_id'     => $id,
                'tipo_sala_id'  => $id_e,
                'nombre'        => $faker->bothify('M####'),
                'descripcion'   => $faker->sentence($nbWords = 6),
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_h = \DB::table('cursos')->insertGetId([
                'asignatura_id' => $id_f,
                'docente_id'    => $id_g,
                'semestre'      => $faker->unique()->randomElement($array=array('1','2','3')),
                'anio'          => $faker->year($max='now'),
                'seccion'       => $faker->randomDigitNotNull,
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            \DB::table('asignaturas_cursadas')->insert([
                'curso_id'      => $id_h,
                'estudiante_id' => $id_i,
                'created_at'    => $created,
                'updated_at'    => $created
            ]);

            $id_k = \DB::table('periodos')->insertGetId([
                'bloque'    => $faker->unique()->randomElement($array=array('I','II','III','IV','V','VI','VII','VIII','IX')),
                'inicio'    => $faker->time($format='H:i',$max='now'),
                'fin'       => $faker->time($format='H:i',$max='now'),
                'created_at'=> $created,
                'updated_at'=> $created
            ]);

            \DB::table('horarios')->insert([
                'fecha'     => $faker->dateTimeThisYear($min='now'),
                'sala_id'   => $id_j,
                'periodo_id'=> $id_k,
                'curso_id'  => $id_h,
                'created_at'=> $created,
                'updated_at'=> $created
            ]);


        }

    }

}

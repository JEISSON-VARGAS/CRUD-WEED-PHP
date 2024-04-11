<?php

namespace Tests\Feature;

use Tests\Unit\PipasTestCase; // Importa correctamente PipasTestCase
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Pipas;

class PipasControllerTest extends PipasTestCase
{
    use RefreshDatabase;

    /**
     * Prueba la creación de un nuevo registro de Pipas.
     *
     * @return void
     */
    public function test_create_new_pipas_record()
    {
        $data = [
            'Color' => 'Rojo',
            'Material' => 'Acero',
        ];

        $response = $this->post('/home', $data);

        $response->assertRedirect(); // Verifica que la respuesta sea una redirección
        $this->assertDatabaseHas('pipas', $data); // Verifica que el registro se haya creado en la base de datos
    }
    /**
     * Prueba leer todos los registros de Pipas.
     *
     * @return void
     */
    public function test_read_all_pipas_records()
    {
        // Crear algunos registros de prueba
        Pipas::factory()->count(5)->create();

        // Realizar una solicitud GET a la ruta que devuelve todos los registros
        $response = $this->get('/home');

        // Verificar que la solicitud haya sido exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que se devuelvan los datos de todos los registros en la respuesta
        $pipas = Pipas::all();
        foreach ($pipas as $pipa) {
            $response->assertSee($pipa->Color);
            $response->assertSee($pipa->Material);
            // Agregar verificaciones adicionales según los campos que desees probar
        }
    }
    /**
     * Prueba la actualización de un registro existente de Pipas.
     *
     * @return void
     */
    public function test_update_existing_pipas_record()
    {
        // Crear un registro de prueba
        $pipa = Pipas::factory()->create([
            'Color' => 'Rojo',
            'Material' => 'Acero',
        ]);

        // Datos actualizados para la actualización
        $updatedData = [
            'Color' => 'Azul',
            'Material' => 'Hierro',
        ];

        // Realizar una solicitud PUT a la ruta que maneja la actualización
        $response = $this->put("home/{$pipa->id}", $updatedData);

        // Verificar que la solicitud haya sido exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que los datos del registro se hayan actualizado correctamente en la base de datos
        $this->assertDatabaseHas('pipas', $updatedData);
    }
    /**
     * Prueba leer un registro específico de Pipas.
     *
     * @return void
     */
    public function test_read_specific_pipas_record()
    {
        // Crear un registro de prueba
        $pipa = Pipas::factory()->create([
            'Color' => 'Rojo',
            'Material' => 'Acero',
        ]);

        // Realizar una solicitud GET a la ruta que devuelve el registro específico
        $response = $this->get("/home/{$pipa->id}");

        // Verificar que la solicitud haya sido exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que los datos del registro devueltos coincidan con los datos del registro creado
        $response->assertJson([
            'Color' => $pipa->Color,
            'Material' => $pipa->Material,
        ]);
    }
    /**
     * Prueba eliminar un registro específico de Pipas.
     *
     * @return void
     */
    public function test_delete_specific_pipas_record()
    {
        // Crear un registro de prueba
        $pipa = Pipas::factory()->create([
            'Color' => 'Rojo',
            'Material' => 'Acero',
        ]);

        // Realizar una solicitud DELETE a la ruta que maneja la eliminación del registro
        $response = $this->delete("/home/{$pipa->id}");

        // Verificar que la solicitud haya sido exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que el registro haya sido eliminado de la base de datos
        $this->assertDeleted($pipa);
    }
    /**
     * Prueba crear un registro sin completar todos los campos obligatorios de Pipas.
     *
     * @return void
     */
    public function test_create_pipas_record_without_required_fields()
    {
        // Datos incompletos para la creación del registro
        $incompleteData = [
            // Falta el campo 'Color', que es obligatorio
            'Material' => 'Acero',
        ];

        // Realizar una solicitud POST a la ruta que maneja la creación del registro
        $response = $this->post('/home', $incompleteData);

        // Verificar que la solicitud haya sido exitosa (código de estado 422, que indica una falla de validación)
        $response->assertStatus(422);

        // Verificar que la respuesta contenga mensajes de error de validación para los campos obligatorios faltantes
        $response->assertJsonValidationErrors([
            'Color',
        ]);
    }
    /**
     * Prueba actualizar un registro con datos inválidos de Pipas.
     *
     * @return void
     */
    public function test_update_pipas_record_with_invalid_data()
    {
        // Crear un registro de prueba
        $pipa = Pipas::factory()->create([
            'Color' => 'Rojo',
            'Material' => 'Acero',
        ]);

        // Datos de actualización inválidos
        $invalidData = [
            'Color' => '', // Color vacío, lo que es inválido según las reglas de validación
            'Material' => 'Hierro',
        ];

        // Realizar una solicitud PUT a la ruta que maneja la actualización del registro
        $response = $this->put("/home/{$pipa->id}", $invalidData);

        // Verificar que la solicitud haya sido exitosa (código de estado 422, que indica una falla de validación)
        $response->assertStatus(422);

        // Verificar que la respuesta contenga mensajes de error de validación para los datos inválidos
        $response->assertJsonValidationErrors([
            'Color',
        ]);
    }
    /**
     * Prueba leer un registro que no existe en Pipas.
     *
     * @return void
     */
    public function test_read_nonexistent_pipas_record()
    {
        // ID de un registro que no existe
        $nonexistentId = 9999;

        // Realizar una solicitud GET a la ruta que maneja la lectura del registro
        $response = $this->get("/home/{$nonexistentId}");

        // Verificar que la solicitud haya sido exitosa (código de estado 404, que indica que el recurso no fue encontrado)
        $response->assertStatus(404);
    }
    /**
     * Prueba eliminar un registro que no existe en Pipas.
     *
     * @return void
     */
    public function test_delete_nonexistent_pipas_record()
    {
        // ID de un registro que no existe
        $nonexistentId = 9999;

        // Realizar una solicitud DELETE a la ruta que maneja la eliminación del registro
        $response = $this->delete("/home/{$nonexistentId}");

        // Verificar que la solicitud haya sido exitosa (código de estado 404, que indica que el recurso no fue encontrado)
        $response->assertStatus(404);
    }
}

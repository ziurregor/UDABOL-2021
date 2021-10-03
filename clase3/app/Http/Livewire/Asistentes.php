<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Asistente;

class Asistentes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $apellido, $ci, $correo, $telefono;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.asistentes.view', [
            'asistentes' => Asistente::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('ci', 'LIKE', $keyWord)
						->orWhere('correo', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre = null;
		$this->apellido = null;
		$this->ci = null;
		$this->correo = null;
		$this->telefono = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'ci' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
        ]);

        Asistente::create([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'ci' => $this-> ci,
			'correo' => $this-> correo,
			'telefono' => $this-> telefono
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Asistente Successfully created.');
    }

    public function edit($id)
    {
        $record = Asistente::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->apellido = $record-> apellido;
		$this->ci = $record-> ci;
		$this->correo = $record-> correo;
		$this->telefono = $record-> telefono;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'ci' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Asistente::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'ci' => $this-> ci,
			'correo' => $this-> correo,
			'telefono' => $this-> telefono
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Asistente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Asistente::where('id', $id);
            $record->delete();
        }
    }
}

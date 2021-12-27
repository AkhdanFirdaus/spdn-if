<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NilaiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $total = ($this->tugas * 0.3) + ($this->uts * 0.3) + ($this->uas * 0.4);
        $grade = 'T';
        if ($total >= 80 && $total <= 100) {
            $grade = 'A';
        } else if ($total >= 70 && $total < 80) {
            $grade = 'B';
        } else if ($total >= 60 && $total < 70) {
            $grade = 'C';
        } else if ($total >= 50 && $total < 50) {
            $grade = 'D';
        } else if ($total >= 0 && $total < 50) {
            $grade = 'E';
        } else {
            $grade = 'T';
        }

        return [
            'mahasiswa' => [
                'nama' => $this->mahasiswa_nama,
                'nim' => $this->nim,
            ],
            'mata_kuliah' => [
                'nama' => $this->mk_nama,
                'semester' => $this->semester,
                'sks' => $this->sks,
            ],
            'tugas' => $this->tugas,
            'uts' => $this->uts,
            'uas' => $this->uas,
            'total' => $total,
            'grade' => $grade,
            'created_at' => $this->created_at
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'grade',
        'category',
        'content'
    ];

    protected $casts = [
        'content' => 'array'
    ];

    public function students() {
        return $this->belongsToMany(Student::class);
    }

    public function populateCourse() {

        // Kelas 10 Fisika
        $this->create([
            'course_name' => 'Besaran dan Satuan',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Vektor',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'GLBB',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Hukum Newton',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Usaha dan Energi',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Momentum dan Impuls',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Getaran Harmonis',
            'grade' => '10',
            'category' => 'fisika'
        ]);

        // Kelas 10 Matematika

        $this->create([
            'course_name' => 'Persamaan Linear Kuadrat',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Logaritma',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Eksponen',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Persamaan Linear Mutlak',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Fungsi Kuadrat',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Persamaan Kuadrat',
            'grade' => '10',
            'category' => 'matematika'
        ]);

        // Kelas 10 Kimia

        $this->create([
            'course_name' => 'Reaksi Redoks',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Bilangan Oksidasi',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Hukum Kekekalan Massa',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Atom',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Tabel Periodik',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Ikatan Ion',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Larutan Elektrolit',
            'grade' => '10',
            'category' => 'kimia'
        ]);

        // Kelas 10 Biologi

        $this->create([
            'course_name' => 'Sistem Reproduksi',
            'grade' => '10',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Keanekaragaman Hayati',
            'grade' => '10',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Proses Daur Ulang',
            'grade' => '10',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Animalia',
            'grade' => '10',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Plantae',
            'grade' => '10',
            'category' => 'biologi'
        ]);
        // Kelas 10 B Indonesia

        $this->create([
            'course_name' => 'Anekdot',
            'grade' => '10',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Puisi',
            'grade' => '10',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Biografi',
            'grade' => '10',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Debat',
            'grade' => '10',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Teks Laporan Hasil Observasi',
            'grade' => '10',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Teks Negosiasi',
            'grade' => '10',
            'category' => 'Teks Eksposisi'
        ]);

        // Kelas 10 B Inggris

        $this->create([
            'course_name' => 'Past Perfect Tense',
            'grade' => '10',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Simple Future Tense',
            'grade' => '10',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Present Continuous Tense',
            'grade' => '10',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Pronoun',
            'grade' => '10',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Narrative Text',
            'grade' => '10',
            'category' => 'inggris'
        ]);
    }
}

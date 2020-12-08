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
        
        // Kelas 11 Fisika
        $this->create([
            'course_name' => 'Fluida Statis',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Fluida Dinamis',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Teori Kinetik Gas',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Termodinamika',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Gelombang Bunyi',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Gelombang Cahaya',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Cermin dan Lensa',
            'grade' => '11',
            'category' => 'fisika'
        ]);

        // Kelas 12 Fisika
        $this->create([
            'course_name' => 'Listrik Statis',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Magnet',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Fisika Kuantum',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Gelombang Elektromagnetik',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Listrik Arus Searah',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Listrik Bolak-balik',
            'grade' => '12',
            'category' => 'fisika'
        ]);

        $this->create([
            'course_name' => 'Induksi',
            'grade' => '12',
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

        // Kelas 11 Matematika

        $this->create([
            'course_name' => 'Logika Matematika',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Matriks Dasar',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Barisan dan Deret',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Limit Aljabar',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Turunan Aljabar',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Trigonometri',
            'grade' => '11',
            'category' => 'matematika'
        ]);

        // Kelas 12 Matematika

        $this->create([
            'course_name' => 'Geometri Bidang Datar',
            'grade' => '12',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Geometri Bidang Ruang',
            'grade' => '12',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Mean, Median, Modus',
            'grade' => '12',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Kuartil, Desil, Simpangan Baku, Varian ',
            'grade' => '12',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Kaidah Pencacahan, Peluang, Permutasi, dan Kombinasi ',
            'grade' => '12',
            'category' => 'matematika'
        ]);

        $this->create([
            'course_name' => 'Limit Fungsi Trigonometri',
            'grade' => '12',
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

        // Kelas 11 Kimia

        $this->create([
            'course_name' => 'Termokimia',
            'grade' => '11',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Larutan Asam Basa',
            'grade' => '11',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Stoikiometri',
            'grade' => '11',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Kelarutan',
            'grade' => '11',
            'category' => 'kimia'
        ]);

        // Kelas 12 Kimia

        $this->create([
            'course_name' => 'Kimia Unsur',
            'grade' => '12',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Radioaktif',
            'grade' => '12',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Senyawa Karbon',
            'grade' => '12',
            'category' => 'kimia'
        ]);

        $this->create([
            'course_name' => 'Elektrokimia',
            'grade' => '12',
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

        // Kelas 11 Biologi

        $this->create([
            'course_name' => 'Biokimia',
            'grade' => '11',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Sel',
            'grade' => '11',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Jaringan Tumbuhan',
            'grade' => '11',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Jaringan Hewan',
            'grade' => '11',
            'category' => 'biologi'
        ]);

        // Kelas 12 Biologi

        $this->create([
            'course_name' => 'Hereditas',
            'grade' => '12',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Evolusi',
            'grade' => '12',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Genetika',
            'grade' => '12',
            'category' => 'biologi'
        ]);

        $this->create([
            'course_name' => 'Bioteknologi',
            'grade' => '12',
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

        // Kelas 11 B Indonesia

        $this->create([
            'course_name' => 'Teks Eksplanasi',
            'grade' => '11',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Prosedur',
            'grade' => '11',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Proposal',
            'grade' => '11',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Drama',
            'grade' => '11',
            'category' => 'indonesia'
        ]);

        // Kelas 12 B Indonesia

        $this->create([
            'course_name' => 'Novel',
            'grade' => '12',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Gagasan Utama',
            'grade' => '12',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Kritik dan Saran',
            'grade' => '12',
            'category' => 'indonesia'
        ]);

        $this->create([
            'course_name' => 'Cerita Sejarah',
            'grade' => '12',
            'category' => 'indonesia'
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

        // Kelas 11 B Inggris

        $this->create([
            'course_name' => 'Opinion',
            'grade' => '11',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Expressing Emotions',
            'grade' => '11',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Text',
            'grade' => '11',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Grammar',
            'grade' => '11',
            'category' => 'inggris'
        ]);

        // Kelas 12 B Inggris

        $this->create([
            'course_name' => 'Procedure Text',
            'grade' => '12',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Suggestion',
            'grade' => '12',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Analytical Text',
            'grade' => '12',
            'category' => 'inggris'
        ]);

        $this->create([
            'course_name' => 'Review Text',
            'grade' => '12',
            'category' => 'inggris'
        ]);
    }
}

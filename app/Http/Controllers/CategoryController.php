<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($grade, $subject) {
        if ($grade == '10') {
            if ($subject == 'fisika') {
                return $this->tenthGradeFisika();
            }

            if ($subject == 'matematika') {
                return $this->tenthGradeMatematika();
            }

            if ($subject == 'kimia') {
                return $this->tenthGradeKimia();
            }

            if ($subject == 'biologi') {
                return $this->tenthGradeBiologi();
            }

            if ($subject == 'indonesia') {
                return $this->tenthGradeIndonesia();
            }

            if ($subject == 'inggris') {
                return $this->tenthGradeInggris();
            }

        } else if ($grade == '11') {
            if ($subject == 'fisika') {
                return $this->eleventhGradeFisika();
            }

            if ($subject == 'matematika') {
                return $this->eleventhGradeMatematika();
            }

            if ($subject == 'kimia') {
                return $this->eleventhGradeKimia();
            }

            if ($subject == 'biologi') {
                return $this->eleventhGradeBiologi();
            }

            if ($subject == 'indonesia') {
                return $this->eleventhGradeIndonesia();
            }

            if ($subject == 'inggris') {
                return $this->eleventhGradeInggris();
            }

        } else if ($grade == '12') {
            if ($subject == 'fisika') {
                return $this->twelfthGradeFisika();
            }

            if ($subject == 'matematika') {
                return $this->twelfthGradeMatematika();
            }

            if ($subject == 'kimia') {
                return $this->twelfthGradeKimia();
            }

            if ($subject == 'biologi') {
                return $this->twelfthGradeBiologi();
            }

            if ($subject == 'indonesia') {
                return $this->twelfthGradeIndonesia();
            }

            if ($subject == 'inggris') {
                return $this->twelfthGradeInggris();
            }

        } else {
            return "Something went wrong.";
        }
    }

    private function tenthGradeFisika() {
        return view('categories.kelas10.fisika');
    }

    private function tenthGradeMatematika() {
        return view('categories.kelas10.matematika');
    }

    private function tenthGradeKimia() {
        return view('categories.kelas10.kimia');
    }

    private function tenthGradeBiologi() {
        return view('categories.kelas10.biologi');
    }

    private function tenthGradeIndonesia() {
        return view('categories.kelas10.indonesia');
    }

    private function tenthGradeInggris() {
        return view('categories.kelas10.inggris');
    }

    private function eleventhGradeFisika() {
        return view('categories.kelas11.fisika');
    }

    private function eleventhGradeMatematika() {
        return view('categories.kelas11.matematika');
    }

    private function eleventhGradeKimia() {
        return view('categories.kelas11.kimia');
    }

    private function eleventhGradeBiologi() {
        return view('categories.kelas11.biologi');
    }

    private function eleventhGradeIndonesia() {
        return view('categories.kelas11.indonesia');
    }

    private function eleventhGradeInggris() {
        return view('categories.kelas11.inggris');
    }

    private function twelfthGradeFisika() {
        return view('categories.kelas12.fisika');
    }

    private function twelfthGradeMatematika() {
        return view('categories.kelas12.matematika');
    }

    private function twelfthGradeKimia() {
        return view('categories.kelas12.kimia');
    }

    private function twelfthGradeBiologi() {
        return view('categories.kelas12.biologi');
    }

    private function twelfthGradeIndonesia() {
        return view('categories.kelas12.indonesia');
    }

    private function twelfthGradeInggris() {
        return view('categories.kelas12.inggris');
    }
}

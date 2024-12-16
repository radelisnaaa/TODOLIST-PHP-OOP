<?php

 namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodoList(): void
        {
            while (true) {
                $this->todolistService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan =InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodoList(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal");

            if ($todo == "x") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodoList($todo);
            }
        } 

        function removeTodoList(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodoList($pilihan);
            }
        }

    }
    
 }
 
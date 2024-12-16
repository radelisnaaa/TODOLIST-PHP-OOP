<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
function testShowTodolist() : void {
    $todolistRepository = new TodolistRepositoryimpl();
    $todolistRepository->todolist[1] = new Todolist("Belajarv PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistService->showTodolist();
}
function testAddTodolist() : void {
    $todolistRepository = new TodolistRepositoryimpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->showTodolist();
}
function testRemoveTodolist() : void {
    $todolistRepository = new TodolistRepositoryimpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();
}
testShowTodolist();
testAddTodolist();
testRemoveTodolist();


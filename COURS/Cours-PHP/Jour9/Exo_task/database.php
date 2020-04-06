<?php

function getPDO()
{
    $dsn = 'mysql:host=localhost;dbname=wf3_test';
    $pdo = new PDO($dsn, 'root', 'root');
    $pdo->exec('SET CHARACTER SET utf8');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}

function addTask($content)
{
    global $pdo;

    $request = $pdo->prepare('INSERT INTO task (content, date_create) 
    VALUES (:content, CURRENT_DATE())');

    $request->bindValue(':content', $content);

    return $request->execute();
}

function getAllTask()
{
    global $pdo;
    $request = $pdo->query('SELECT * FROM task');

    return $request->fetchAll();
}

/**
 * Modifie un tâche en mettant checked à 1
 */
function checkTask($id)
{
    global $pdo;
    $request = $pdo->prepare('UPDATE task SET checked =1 WHERE id = :id');
    $request->bindValue(':id', $id, PDO::PARAM_INT);

    return $request->execute();
}

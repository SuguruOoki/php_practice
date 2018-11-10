<?php
require_once 'Group.class.php';
require_once 'Employee.class.php';
require_once 'DumpVisitor.class.php';
require_once 'CountVisitor.class.php';

/**
 * 木構造を作成
 */
$root_entry = new Group("001", "本社");
$root_entry->add(new Employee("00101", "CEO"));
$root_entry->add(new Employee("00102", "CTO"));

$group1 = new Group("010", "○○支店");
$group1->add(new Employee("01001", "支店長"));
$group1->add(new Employee("01002", "能美"));
$group1->add(new Employee("01003", "鈴木"));
$group1->add(new Employee("01003", "伊藤"));

$group2 = new Group("110", "△△営業所");
$group2->add(new Employee("11001", "川村"));
$group1->add($group2);
$root_entry->add($group1);

$group3 = new Group("020", "××支店");
$group3->add(new Employee("02001", "山こ"));
$group3->add(new Employee("02002", "田中"));
$group3->add(new Employee("02002", "逸見"));
$root_entry->add($group3);

/**
 * 木構造をダンプ
 */
$root_entry->accept(new DumpVisitor());

/**
 * 同じ木構造に対して、別のVisitorを使用する
 */
$visitor = new CountVisitor();
$root_entry->accept($visitor);
echo '組織数：' . $visitor->getGroupCount() . '<br>';
echo '社員数：' . $visitor->getEmployeeCount() . '<br>';

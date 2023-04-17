<?php

require_once "abstract.php";
require_once "restaurant.php";
require_once "food.php";
require_once "receipt.php";


echo "\n _______________________________\n|  Qual Restaurante deseja ir   |\n|\t\t\t\t\t\t\t    |\n|1 - The Legend of Sanduíches △ |\n|2 - Constelações ☾ \t\t    |\n|3 - Churrascaria Donleoni ◦ \t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";

$i = readline("--> ");

switch ($i) {
    case 1:
        $a = new rest();
        $b = new food();
        $c = new receipt();

        $a->setRestAtrs("The Legend of Sanduíches", "Hamburgueria","$$$",9,"Rua Francisco Bezerra, 77","17:00 - 02:00");
        echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



        echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Ocarina Burguer ◦\t\t\t|\n|2 - Majoras Burguer ☾ \t\t    |\n|3 - Twilight Burguer △ \t\t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
        $x = readline("\n\n--> ");
        
        switch ($x) {
            case 1:
                $y = rand(2234123456,9892349320);
          
                $b->setFoodAtrs("Ocarina Burguer", "Pão da Casa, Molho de Tomate Le Pinguê, Hambúrguer\n|com queijos Mussarela, Provolone, Catupiry e Gorgonzola.",14.50,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
                
                break;
            
            case 2:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Majoras Burguer", "Pão da Casa, Maionese de Bacon, Hambúrguer, Queijo Muçarela, Cebola Roxa, Alface e Tomate.",20.00,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
                break;

          
            case 3:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Twilight Burguer", "Pão Especial, Maionese da Casa, Hambúrguer prensado, Queijo Cheddar, Ovo frito e Bacon em tiras",18.50,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Debito","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                break;
          
            case 4:
              break;
        }
        echo "\nfim do programa";
        break;



  
    case 2:
        
        $a = new rest();
        $b = new food();
        $c = new receipt();

        $a->setRestAtrs("Constelações", "Pastelaria","$$",7,"rua São Paulo, Centro 77","17:00 - 02:00");
        echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



        echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Júpiter ◦\t\t\t\t\t|\n|2 - Terra ☾ \t\t\t\t    |\n|3 - Marte △ \t\t\t\t\t|\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
        $x = readline("\n\n--> ");
        
        switch ($x) {
            case 1:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Júpiter", "pastel com mussarela, presunto, tomate, orégano, ovo, frango, catupiry, bacon e calabresa com cebola",19.50,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
                break;
            
            case 2:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Terra", "carne moída com pedaços de ovo cozido",8.00,"Prato Principal",2);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
                break;

          
            case 3:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Marte", "Banana com pedaços de chocolate branco ou preto.",12.50,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                break;
          
            case 4:
              break;
        }
        echo "\nfim do programa";
        
        break;
  case 3:
  
        $a = new rest();
        $b = new food();
        $c = new receipt();

        $a->setRestAtrs("Churrascaria Donleoni", "Churrascaria","$$",25,"Rua do logadouro, 242","8:00 - 00:00");
        echo "\n|\tRestaurante Selecionado:","\n|",$a->getRestAtrs();



        echo "\n _______________________________\n|  Qual Prato deseja escolher   |\n|\t\t\t\t\t\t\t    |\n|1 - Batata Frita com Maminha ◦\t|\n|2 - Filé de costela c/ Queijo ☾|\n|3 - Picanha a moda da casa △   |\n|4 - Sair\t\t\t\t\t    |\n|_______________________________|\n\n";
        $x = readline("\n\n--> ");
        
        switch ($x) {
            case 1:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Batata Frita com Maminha", "Batata Frita com porçoes de maminha e cebola",40.99,"Petisco",4.8);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                
                break;
            
            case 2:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Filé de costela com Queijo", "Maminha, queijo, tempero da casa",54.99,"Petisco",4.5);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
            
                break;

          
            case 3:
          $y = rand(2234123456,9892349320);
                $b->setFoodAtrs("Picanha a moda da casa", "Picanha(ao ponto do cliente) e tempero da casa",100.00,"Prato Principal",5);
                $c->setReceiptAtrs($y, "Pix","Jhonatta Pietro de Oliveira","123.456.678.99");
          
                echo "\n|\tPrato Selecionado:","\n|",$b->getFoodAtrs();
                echo "\n|\t\tRecibo:","\n|",$a->getRestName(),$b->getFoodName(),$b->getFoodPrice(),$c->getReceiptAtrs(),"\n";
                break;
          
            case 4:
              break;
        }
        echo "\nfim do programa";
        
        break;
  
}







?>
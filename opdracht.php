<?php
class Table
{
    private $_rows;

    public function __construct()
    {
        $this->_rows = [];
    }

    public function append($row)
    {
        $this->_rows[] = $row;
    }

    public function draw()
    {
        echo '<table border="1">' . PHP_EOL; // Begin van de tabel, border voor de duidelijkheid

        foreach ($this->_rows as $row) {
            echo '<tr>' . PHP_EOL;

            foreach ($row->getCells() as $cell) {
                echo '<td>' . $cell->getContent() . '</td>' . PHP_EOL;
            }

            echo '</tr>' . PHP_EOL;
        }

        echo '</table>' . PHP_EOL;
    }
}

class Row
{
    private $_cells;

    public function __construct()
    {
        $this->_cells = [];
    }

    public function append($cell)
    {
        $this->_cells[] = $cell;
    }

    public function getCells()
    {
        return $this->_cells;
    }
}

class Cell
{
    private $_content;

    public function __construct($content)
    {
        $this->_content = $content;
    }

    public function getContent()
    {
        return $this->_content;
    }
}

/* rocedurele code */
$cellA1 = new Cell('ID');
$cellA2 = new Cell('Naam');

$rowA = new Row();
$rowA->append($cellA1);
$rowA->append($cellA2);
$rowA->append(new Cell('Leeftijd')); // Zo kan het ook!

// BBBBBBB

$rowB = new Row();
$rowB->append(new Cell('1'));
$rowB->append(new Cell('Robin Hardjowijono'));
$rowB->append(new Cell('18 jaar'));

$rowC = new Row();
$rowC->append(new Cell('2'));
$rowC->append(new Cell('Jelle kragten'));
$rowC->append(new Cell('16 jaar'));

$rowD = new Row();
$rowD->append(new Cell('3'));
$rowD->append(new Cell('Jeffrey Vos'));
$rowD->append(new Cell('21 jaar'));

$rowE = new Row();
$rowE->append(new Cell('4'));
$rowE->append(new Cell('Henk de boom'));
$rowE->append(new Cell('52 jaar'));

$rowF = new Row();
$rowF->append(new Cell('5'));
$rowF->append(new Cell('Sjon Beton'));
$rowF->append(new Cell('33 jaar'));

$table = new Table();
$table->append($rowA);
$table->append($rowB);
$table->append($rowC);
$table->append($rowD);
$table->append($rowE);
$table->append($rowF);
$table->draw();

?>

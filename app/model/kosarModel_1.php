<?php

class kosarModel implements Iterator, Countable {

	// Array stores the list of items in the cart:
	protected $items = array();
	
	// For tracking iterations:
	protected $position = 0;

	// For storing the IDs, as a convenience:
	protected $ids = array();

    // Constructor just sets the object up for usage:
    function __construct() {
		$this->items = array();
		$this->ids = array();
    }

	// Returns a Boolean indicating if the cart is empty:
	public function isEmpty() {
		return (empty($this->items));
	}

	// Adds a new item to the cart:
	public function addItem(Item $item) {
	
		// Need the item id:
		$id = $item->getId();
	
		// Throw an exception if there's no id:
		if (!$id) throw new Exception('The cart requires items with unique ID values.');

		// Add or update:
		if (isset($this->items[$id])) {
			$this->updateItem($item, $this->items[$item]['qty'] + 1);
		} else {
			$this->items[$id] = array('item' => $item, 'qty' => 1);
			$this->ids[] = $id; // Store the id, too!
		}
	
	} // End of addItem() method.

	// Changes an item already in the cart:
	public function updateItem(Item $item, $qty) {

		// Need the unique item id:
		$id = $item->getId();

		// Delete or update accordingly:
		if ($qty === 0) {
			$this->deleteItem($item);
		} elseif ( ($qty > 0) && ($qty != $this->items[$id]['qty'])) {
			$this->items[$id]['qty'] = $qty;
		}

	} // End of updateItem() method.

	// Removes an item from the cart:
	public function deleteItem(Item $item) {

		// Need the unique item id:
		$id = $item->getId();

		// Remove it:
		if (isset($this->items[$id])) {
			unset($this->items[$id]);
	
			// Remove the stored id, too:
			$index = array_search($id, $this->ids);
			unset($this->ids[$index]);

			// Recreate that array to prevent holes:
			$this->ids = array_values($this->ids);
	
		}
		
	} // End of deleteItem() method.
	
	// Required by Iterator; returns the current value:
	public function current() {
	
		// Get the index for the current position:
		$index = $this->ids[$this->position];
	
		// Return the item:
	    return $this->items[$index];

	} // End of current() method.

	// Required by Iterator; returns the current key:
	public function key() {
	    return $this->position;
	}

	// Required by Iterator; increments the position:
	public function next() {
	    $this->position++;
	}

	// Required by Iterator; returns the position to the first spot:
	public function rewind() {
	    $this->position = 0;
	}

	// Required by Iterator; returns a Boolean indiating if a value is indexed at this position:
	public function valid() {
		return (isset($this->ids[$this->position]));
	}
	
	// Required by Countable:
	public function count() {
		return count($this->items);
	}

} // End of ShoppingCart class.

class Item {
	
	// Item attributes are all protected:
	protected $id;
	protected $name;
	protected $price;
	
	// Constructor populates the attributes:
	public function __construct($id, $name, $price)	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
	
	// Method that returns the ID:
	public function getId()	{
		return $this->id;
	}

	// Method that returns the name:
	public function getName() {
		return $this->name;
	}

	// Method that returns the price:
	public function getPrice() {
		return $this->price;
	}
        
        public function kilista() {
        $pdo = Application::getConnection();
        $termek1="select * from termek order by datum DESC LIMIT 3; ";
        $stm=$pdo->prepare($termek1);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }

} 
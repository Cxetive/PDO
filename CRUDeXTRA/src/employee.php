<?php
include_once('database.php');

class Employee extends Database
{
    private $employeeId;
    private $firstName;
    private $lastName;
    private $addressLine1;
    private $postalCode;
    private $city;
    private $state;
    private $country;
    private $phone;

    // Get all customers
    public function getAllCustomers()
    {
        $query = "SELECT * FROM employee";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getCustomer($employeeId)
    {
        $query = "SELECT * FROM employee WHERE employeeId = $employeeId";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function saveCustomer()
    {
        // Check if all required fields are filled in
        if(
            $this->getFirstName() == "" || $this->getLastName() == "" 
            || $this->getAddressLine1() == "" 
            || $this->getPostalCode() == "" || $this->getCity() == "" 
            || $this->getState() == "" || $this->getCountry() == "" 
            || $this->getPhone() == ""
        ){
            return false;
        }

        $firstName = $this->getFirstName();
        $lastName = $this->getLastName();

        $address = $this->getAddressLine1();
        $postalCode = $this->getPostalCode();
        $city = $this->getCity();
        $state = $this->getState();
        $country = $this->getCountry();
        $phone = $this->getPhone();

        $query = "INSERT INTO employee AS (firstName, lastName, address, postalCode, city, state, country, phone) VALUES ($firstName, $lastName, $address, $postalCode, $city, $state, $country, $phone)";
        
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

   
    // Update a customer
    public function updateCustomer($employeeId)
    {
        // Check if all required fields are filled in
        if(
            $this->getFirstName() == "" || $this->getLastName() == "" 
            || $this->getAddressLine1() == "" 
            || $this->getPostalCode() == "" || $this->getCity() == "" 
            || $this->getState() == "" || $this->getCountry() == "" 
            || $this->getPhone() == ""
        ){
            return false;
        }

        $firstName = $this->getFirstName();
        $lastName = $this->getLastName();
        $address = $this->getAddressLine1();
        $postalCode = $this->getPostalCode();
        $city = $this->getCity();
        $state = $this->getState();
        $country = $this->getCountry();
        $phone = $this->getPhone();

        $query = "UPDATE employee (firstName, lastName, gender, address, postalCode, city, state, country, phone) AS $firstName, $lastName, $gender, $address, $postalCode, $city, $state, $country, $phone WHERE employeeId = '$employeeId";
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // Delete a customer
    public function deleteCustomer($customerId)
    {
        $query = "DELETE FROM employee WHERE employeeId = '$customerId";
        // Return true if the query is successful, else return false
        if(parent::voerQueryUit($query) == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // Getters and setters
    public function getCustomerId()
    {
        return $this->employeeId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
}



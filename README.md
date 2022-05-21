# used_car_listings_ci4
A project that uses Codeigniter 4 and has an API to handle listing fees for a car selling website.

Codeigniter 4 docs: https://codeigniter.com/user_guide/intro/index.html

Welcome to the used car listing site - Niall's Used Cars!

This project has an interface which allows us to calculate the listing fees for a car to be sold on a site, based on the its value and a couple of other factors.

This is built in Codeigniter 4, which has an in built server we can use, so no need for docker to run this project.

You will need to have a working local MySQL database to serve this programme.
If you need to set up MySQL, you can download it here: https://www.mysql.com/downloads/

# Steps to set up project

1. Copy this repository code to your machine. 
2. Link your database, the project is currently set up for the default local user (username: root, password: 'password'). You can edit the credentials in the Config > Database.php file. Line 33 in this file is where you will see the database credentials.
3. In your local database you will need to have a `used_cars` database. Set this up.
4. In this schema, run the following command

```sql 
CREATE TABLE `car_listings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reg` varchar(255) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `mileage` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `listing_expiry` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

5. When this table has been created, run the following sql insert: 

```sql
INSERT INTO `car_listings` (`make`, `model`, `reg`, `year`, `mileage`, `price`, `listing_expiry`)
VALUES
	('BMW', '4 Series', 'Y7NPH', 2015, 45000, 4999, '2022-05-29'),
	('Mercedes', 'C Class', 'NFZ7707', 2014, 33000, 1400, '2022-05-27'),
	('Mercedes', 'A Class', 'NYZ7011', 2014, 36000, 1400, '2022-05-20'),
	('Vauxhall', 'Astra', 'LFZ9901', 2011, 76000, 700, '2022-05-30'),
	('BMW', '8 Series', 'PGZ8808', 2022, 700, 66000, '2022-06-02'),
	('Mercedes', 'A Class', 'NYZ7011', 2014, 37000, 1400, '2022-06-03');
```
6.  Via the command line, cd into the directory where this project sits and run the spark command to get the localhost running. My folder structure is Projects > used_car_listings, so I will run the commands:
- `cd Projects`
- `cd used_car_listings`
- `php spark serve`
7. You should now be able to access the site via: http://localhost:8080/
8. When you go to this URL you will see a list of cars an their details
9. Clicking the blue `Check Listing Fee` button will hit the `Costing_API` and return the listing fee for the vehicle in an alert box.



# Expected Results from using the interface
1. The listing fee of the BMW 4 series should be: £7.99
2. The listing fee of the Mercedes C class should be £7.99
3. The listing fee of the Vauxhall Astra should be £0
4. The listing fee of the BMW 8 series should be £14.99
5. You should only see one Mercedes A class in the list, as we are only displaying adverts which have NOT expired.
6. The listing fee of the Mercedes A class should be £6.79 - the message should also inform the user that a 15% discount has been applied as it's last listing expired within the last 30 days.


### Some Expected Results from using PostMan
1. The URL we are going to be testing is: http://localhost:8080/costing_API
2. The GET, PUT, PATCH and DELETE request should all return a 403 error, with a message saying: "Action is currently unavailable";
3. Use the following form-data entries to test the POST:
4. car_reg = YFZ8981, car_price = 1000: Expect 200 status code and the msg: "The fee to list this car is: £7.99"

![Screenshot 2022-05-21 at 14 50 11](https://user-images.githubusercontent.com/55992683/169654663-f5252493-4934-400e-a3a1-974f9beda9b4.png)

5.  car_reg = YFZ8981, car_price = Two thousand: Expect 400 status code and the msg: "The car price must be entered as a number"

<img width="1405" alt="Screenshot 2022-05-21 at 15 42 19" src="https://user-images.githubusercontent.com/55992683/169656667-48414737-7aef-495e-bdac-3c5042516276.png">


6. car_reg = OFF8781, car_price = : Expect 400 status code and the msg: "There must be a valid car price and registration. Please try again"

![Screenshot 2022-05-21 at 14 52 11](https://user-images.githubusercontent.com/55992683/169654744-7cb1f904-c563-45bd-8b04-170d191b3f2b.png)

7. car_reg = , car_price = : Expect 400 status code and the msg: "There must be a valid car price and registration. Please try again"

![Screenshot 2022-05-21 at 14 53 20](https://user-images.githubusercontent.com/55992683/169654783-762cdfa8-e525-455c-a87f-99e5cb281f70.png)

8. car_reg = , car_price = 9000 : Expect 400 status code and the msg: "There must be a valid car price and registration. Please try again"

![Screenshot 2022-05-21 at 14 54 04](https://user-images.githubusercontent.com/55992683/169654807-4b5af1ac-a578-4c77-8d0f-5d5ba5141a85.png)

9. car_reg = NYZ7011 , car_price = 5100 : This car's listing has expired within the last 30 days so we should Expect 200 status code and the msg: "The fee to list this car is: £12.74. A 15% discount has been applied because this vehicle listing expired within the last 30 days."

![Screenshot 2022-05-21 at 14 56 54](https://user-images.githubusercontent.com/55992683/169654943-0f29f436-ee2f-42e0-b916-2145605f1e0c.png)


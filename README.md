## Kenya Counties Data

This module introduces Regions, Counties, SubCounties and Wards into your project. It adds the necessary models, controllers, services and migrations for it to work. As this solution seeks to be as unobtrusive as possible, all the data has been handled using seeds. 

## Installation
- Clone this repository
```git clone https://github.com/JessyLedama/kenya-subdivision-data.git```

- Run ```composer install```
- Migrate your database ```php artisan migrate```
- Seed your database with data ```php artisan db:seed```
- Run the system ```php artisan serve```
- You can now access the data via ```localhost:8000``` or though ```localhost:8000/api```

This data is broken down into:
1. Regions
2. Counties 
3. SubCounties
4. Wards


## The Goal
The goal for this package is to have all subdivision data for all Afrikan Countries. Whenever you are building an application that should make use of decentralized units of govt in Kenya and the rest of Afrika, you are forced to manually enter all those records over and over. This, right here, is a solution for that. 
Now using the api access, you can access the data programmatically and use it directly in your projects. 

## What's Covered:
Kenya's units of Gov't:
(Regions are for classification, but are no longer used for administration in  Kenya.)
1. Counties
2. Sub Counties/Constituencies
3. Wards

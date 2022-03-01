# Universal TaskManager API

## How to use

---
 - rename ```env``` to ```.env```
 - run ```git clone https://github.com/sudo-aptinstaller/jeromeAPI.git```
 - run ```cd /jeromeAPI```
 - run ```composer install```
 - run ```npm install```
 - create a database called 'taskmaster' using phpmyadmin
 - run ```php artisan migrate```
 - and finally run ```php artisan serve```

### That's it you are good to go !



 ## Route Listing


### fetch task data : /fetch-task/{id} (GET)

    No Form Data
    
        RETURN : [with Data wrapper] (ex : Use data.id to get task ID)

        return {
            data : [JSON.Object]
        }

### get all tasks  : /fetch-all-tasks (GET)

    No Form Data
    
        RETURN : [with Data wrapper] (ex : Use data.id to get task ID)

        return {
            data : [JSON.Object] 
        }
        
### create task : /create-task (POST)

     form data : {
         name : [string],
         description : [string],
         completed : [boolean] true/false,
         expiry : [date.Time.Object],
     }
     
    RETURN : 

        return {
            status : [statusCode],
            task : [createdTask.JSON.Object]
        }

### edit task : /edit-task/{id} (POST)

    form data : {
        name : [string],
        description : [string],
        completed : [boolean],
        expiry : [date.Time.Object], 
    }

    RETURN : 

        return {
            status : [statusCode],
            task : [modifiedTask.JSON.Object]
        }

### delete task : /delete-task/{id} (DELETE)

    No Form Data

        RETURN : (hint : get deleted ID from {id})

        return { 
            status : [statusCode],
        }


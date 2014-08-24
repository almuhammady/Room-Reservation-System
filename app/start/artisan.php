<?php

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/
Artisan::add(new AddUser);
Artisan::add(new DeleteUser);
Artisan::add(new AddThing);
Artisan::add(new DeleteThing);
Artisan::add(new AddAmenity);
Artisan::add(new DeleteAmenity);
Artisan::add(new AddReservation);
Artisan::add(new DeleteReservation);
Artisan::add(new AddCompany);


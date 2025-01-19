# Playzone-Booking-Platform-for-Sports-Facilities  
**Title of Projects: Playzone: Booking Platform For Sports Facilities**  
**Group: G**  
**Section: 2**  
**Lecturer's Name : Sir Mohd Khairul Azmi Bin Hassan**  


## Group Members
| Name  | Matrics No | Module |
| ------------- | ------------- | ------------- |
| Muhammad Hariz Firhan Bin Mohd Rizlan  | 2220041  | Module 3 |
| Muhammad Aqil bin Suhazi Reza  | 2222987  | Module 1 |
| Muhammad Afzal Bin Mohd Nor  | 2123023  | Module 2 |
| Nurain Awatif Binti Ismail  | 2214552  | Module 5 |
| Fahim Nurhaziq bin Fadzil  | 2216513  | Module 4 |



## Introduction  
Playzone is a user-friendly platform that allows individuals and groups to seamlessly book sports facilities for events, practice sessions, or personal use. With Playzone, users can effortlessly check availability, avoid scheduling conflicts, and secure their desired facility in just a few clicks. Whether you're planning a tournament, organizing a game with friends, or simply looking for some solo practice time, Playzone ensures a smooth and hassle-free booking experience.  

## Objective  
1. Customer Objectives
    - Seamless User Registration and Profile Management:
        - Easily register and log in using email or phone.
        - View comprehensive details about sports facilities, including name, location, pricing, available sports, and photos.

    - Effortless Booking and Payments:
        - Check real-time availability of facilities and book instantly without scheduling conflicts.

    - Stay Updated with Notifications:
        - Receive timely email/SMS notifications for booking confirmations, reminders, and cancellations.

    - Engage in Feedback and Reviews:
        - Leave reviews and ratings for facilities after use.
        - Use ratings and reviews to make informed booking decisions.
    - Participate in Events:
        - Access event details like date, time, and participant capacity.

2. Sports Facility Owner Objectives
    - Efficient Facility Management:
        - Add, update, or delete facility details such as name, location, available sports, pricing, and photos.
        - Manage facility availability by setting schedules and blocking dates or times to prevent overbooking.

    - Streamline Bookings and Payments:
        - Monitor and manage customer bookings in real-time.

    - Monitor and Respond to Reviews:
        - Respond to customer reviews to maintain service quality and build trust.
        - Highlight average ratings and customer feedback to attract more bookings.

    - Event Hosting and Management:
        - Create and manage sports events or tournaments.
        - Ensure event schedules integrate seamlessly with facility bookings to avoid double-booking.
        - Set event details, including prizes, and participant capacities, to attract engagement.

    - Generate Reports and Insights:
        - Access detailed reports, such as monthly revenue, booking trends, and platform performance.
    
    - Engage with Customers through Notifications:
        - Send email/SMS notifications for new bookings, confirmations, and reminders to maintain effective communication with customers.
      
    
## Features and Functionality  
1. User Registration & Profiles
   - Features:
        • User Sign-up/Login: Options for sign-up using email, or phone.
        • User Profile: Personal details, preferences, booking history, payment info, and notifications.
        • User Roles: have customer and owner to differentiate functionalities
2. Facility Management Module
   - Features:
         • Add, update, and delete sports facilities (admin/owners).
         • Facility details (name, location, available sports, pricing, photos).
         • Availability management (set schedules, block dates/times).
3. Booking and Payment Module
    - Features:
         • Real-time availability display for booking slots.
         • Booking creation, modification, and cancellation.
         • Integration with payment gateways for secure online payments.
4. Review and Rating Module
    - Features:
         • Players can leave reviews and ratings for facilities they’ve booked.
         • Facility owners can respond to reviews.
         • Display average ratings and reviews on facility pages.
5. Notification and Reporting Module
    - Features:
         • Email/SMS notifications for booking confirmations, reminders, and cancellations.
         • Reports for facility owners (monthly revenue, booking trends).
         • Admin dashboard for platform performance monitoring (total users, bookings).
6. Event Management Module
   - Features:
         • View sports events or tournaments at facilities.
         • Allow users to register as participants for events.
         • Event details (date, time, rules, prizes, participant capacity).
         • Integration with booking schedules to avoid double-booking facilities.
## Diagram  
### ERD  
![ERD Diagram](ERD%20WAD.png)

### Sequence Diagram
![Sequence Diagram](Sequence%20diagram%20(2).jpg)

## Mock up
# Module 1
![Module 1](Mock%20Up/Module%201.png)

# Module 2
![Module 2](Mock%20Up/Module%202.png)

# Module 3
![Module 3](Mock%20Up/Module%203.png)
![Module 3](Mock%20Up/Module%203%20(2).png)

# Module 4
![Module 4](Mock%20Up/Module%204.png)
![Module 4](Mock%20Up/Module%204%20(2).png)

# Module 5
![Module 5](Mock%20Up/Module%205.png)

## Print Screen 
# Module Hariz Firhan (2220041)
Sign in page
![Sign In page](https://github.com/user-attachments/assets/03869db0-3dc8-4f16-88f1-ecfe0b38fcd4)
Sign up page
![image](https://github.com/user-attachments/assets/65b5fcdc-cb2e-449f-bfba-9571464e30f1)
Comment section for customer
![image](https://github.com/user-attachments/assets/788a365d-2faa-4184-997b-cf601d7b1724)
Comment section for owner
![image](https://github.com/user-attachments/assets/e36e7888-8a94-4576-8ef6-6c9a9fc5af97)
## 📡 Routes List
1. GET /customer/comments - review.customerComment
2. GET /owner/comments - review.ownerComment
3. GET /review/create/customer/comments - review.createComment
4. GET /review/create/customer/comments/{id} - review.createCommentCust
5. POST /review/post/comment - review.store
6. GET /review/show/comment - review.index
7. GET /reviews/average

# Module Aqil Reza (2222987)
Owner Blade
![image](https://github.com/user-attachments/assets/3312feed-939c-499e-87f0-694ac0bed7e6)
Customer Blade
![image](https://github.com/user-attachments/assets/5b36e8ea-38ad-4ccb-842b-e9746f943b16)
Edit Blade
![image](https://github.com/user-attachments/assets/77deaf1f-e8f7-4c22-b9d0-eb4f8d32b257)
Add Facility Blade
![image](https://github.com/user-attachments/assets/e80617ac-32f0-4d4f-b2cd-8210281bf531)
## Routes List
Route::get('/facilities/owner', [FacilityController::class, 'show'])->name('facilities.show'); // Homepage (Owner view)
Route::get('/facilities', [FacilityController::class, 'show'])->name('facilities.show'); // Show facility details
Route::get('/facilities/create', [FacilityController::class, 'create'])->name('facilities.create'); // Show create form
Route::post('/facilities/store', [FacilityController::class, 'store'])->name('facilities.store'); // Store facility
Route::get('/facilities/edit/{id}', [FacilityController::class, 'edit'])->name('facilities.edit'); // Show edit form
Route::put('/facilities/update/{id}', [FacilityController::class, 'update'])->name('facilities.update'); // Update facility
Route::delete('/facilities/delete/{id}', [FacilityController::class, 'destroy'])->name('facilities.destroy'); // Delete facility







# module ain
Module (ain) - Homepage
![Module Homepage](https://github.com/user-attachments/assets/2a4ef50c-9a87-4562-b7f0-2ea4af3d9406)

Module 5 (ain) - event page: list of events
![Module 5 - event](https://github.com/user-attachments/assets/f153b823-728c-4864-8059-952cca8c1973)
Module 5 (ain) - event page: search and filter events choices
![Module 5 - event (search & filter)](https://github.com/user-attachments/assets/f6c0e16d-a5ac-4a84-a9c0-46087683b725)
Module 5 (ain) - click event 5: search and filter events choices
![image](https://github.com/user-attachments/assets/8d3ef343-341e-417e-ae80-ece2e02261ec)
Module 5 (ain) - join event 5 page: 
![join event 5](https://github.com/user-attachments/assets/a2a42595-0468-4c56-a85f-337e987ca756)
Module 5 (ain) - "successfully" join event 5 page: 
![image](https://github.com/user-attachments/assets/c7267f7b-fb6e-4c99-9d10-068070586fb1)








## Challenges

1. When our website crashes at certain times, we’ve realized that we need to be more cautious. Moving forward, we’ll take note not to easily commit and sync our changes to the web.php file without proper consideration, as it can affect our group members' work.
2. Communication is important, i realize that too late as I tried to do my work on my own, and did not try to reach out to my teammates earlier

# Membership Database 

This project is a simple system to manage Members of a club. 

The system would be used by a Club Officer, but no auth system is required. 

## Rules 

### Nouns

These nouns are the main parts of the system. 

#### Member 

A person that wants to, or has joined the club. 

We store their names, address fields, telephone, and a notes field. 

The names and telephone field are required. 

#### Membership Type 

Levels at which a member can join the club. Differing amounts and year periods. 

The cost of membership is stored in pennies, functionality is need to turn this into pounds for display and back to pennies for storage. 

#### Subscription

Members must pay a subscription to join the club. 

A subscription is valid for the current year. I.e. should a member join in June, the membership would expire December 31. 

The subscription's amount and time period is taken from the Membership Type. 

A member may make extra payments before the membership expires, but the period should add on from the end of the most recent subscription and not from the date of payment

### Users 

Who will be using this system. 

#### Club Officer

A person who works for the club to organise the membership. 


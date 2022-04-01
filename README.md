# User Roles Login

In the root folder run: symfony server:start (Docker is not working on this computer, and I didn't have time to fix it)

Users are in memory contained in config/packages/security.yaml

Use echo password_hash('geoffpass123' , PASSWORD_DEFAULT); to find the hash of the password for the users

I added a logout route and logout sub-template so the different users can be tested.

I used if ($this->isGranted('ROLE_USER')) to redirect based on roles.
# PlacementCellPortal
Website for placements and internships for students in a college.

Team Members:
Madaka Srikar Reddy (111701017)
Marella Shiva Sai Teja (111701018)
Katukojwala Sai Deekshith (111701025)

#Follow the below steps to run the application in apache server
sudo apt update
sudo apt install apache2
sudo ufw allow 'Apache'
sudo apt install php libapache2-mod-p
su -u  (* transfer to root user *)
cp -a /home/sunny/github/PlacementCellPortal/. /var/www/html/ (* copy project in apache root dir *)
hostname -I (* copy the address *)
Now run the address in a browser
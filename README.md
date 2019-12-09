<p align="center">
    <a href="https://app.gluemodel.com/">
        <img src="https://app.gluemodel.com/image/glue_drive.png" alt="Logo" width=72 height=72>
    </a>
    <h3 align="center">Glue</h3>
</p>

<p align="center">
    Glue project made with Angular JS + Spring + Hibernate + and much more!
    <br>
    <br>
    :clap::clap::tada::tada::tada::tada::clap::clap:
    <br>
    <br>
</p>

## Table of contents

- [Configuration](#configuration)


## Configuration

We use The Following Steps to Depoloy The Project , Follow thus Steps in order:
1. Clone The file as it is .
2. After the Cloning, Open The Project in NetBeans Or in any other IDE .
3. Just Clean and Build the project and also run the project .
4. Then just Copy the Main-1 and Admin-1 folders from Target folder .
    * web > main > Target > main-1
    * web > admin > Target > admin-1
5. set admin.xml & ROOT.xml files for the above folders(main-1 & admin-1) in-side Catalina/localhost .
6. If any changes are need in Database.properties & Path.properties then make the changes in the following files :
    * /main/target/main-1/WEB-INF/classes/Database.properties
    * /main/target/main-1/WEB-INF/classes/Path.properties
7. we need tomcat8 inside the server to load and run gateWayApp that developed in spring boot and java8 .
8. To setup gateWayApp(developed to configure new HRM module for the Company) open up tomcat8 and put the gateWayApp .war file inside webapps directory and change .war file name to ROOT.war
9. in Step 6 we mentioned an Path.properties file. So if any changes are need for the file then make necessary chaned to the bellow variable
    * gateway.base.url = http://localhost:8082/ (8082 is the port that tomcat8 and gatewayApp runs)
10. gateWayApp in available in https://gitlab.innovaturelabs.com/deepak.k/gateway_api . just clone and run the file as same as the steps 1 to 3.
    * copy the .war file from Target folder (Same as Step4 path)
    

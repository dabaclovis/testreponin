@extends('layouts.main')

@section('content')
    {{-- name email phone number --}}
    <div class=" d-flex justify-content-center align-content-center">
        <div class="w3-center">
            <b>
                <div>Clovis Daba</div>
                <div>lnamefname@yahoo.com</div>
                <div>614-000-0000</div>
            </b>
        </div>
    </div>
    {{-- end name email phone number --}}
    {{-- linkedin github location --}}
    <div class=" d-flex justify-content-between w3-bottombar">
        <div>
            <a href="https://linkedin.com/in/dabaclovis" target="_blank" class="btn btn-primary">linkedin</a>
            <a href="https://github.com/dabaclovis" target="_blank" class="btn btn-primary">Github</a>
        </div>
        <div>
            Columbus OH,
        </div>
    </div>
    {{-- end linkedin github location --}}
    {{-- Skill Section --}}
    <div class=" d-flex justify-content-center align-content-center">
        <h4><b>CLOUD/DEVOPS ENGINEER</b></h4>
    </div>
    <div id="accord">
        <h4>Summary</h4>
        <div class="container">
            <p><b>Summary Statement</b></p>
            <p>Highly accomplished Cloud/Devops engineer with 5+ years of solid experience architecting
                on AWS could. Involved in technical roles designing and implementing architectures solutions,
                enhancing smooth operations, cost optimization, end-to-end infrastructural monitoring, events data
                analysis, troubleshooting, infrastructural security, systems configurations, and maintenance
                to ensure best quality service. Enthusiastic, and customer service-oriented individual
                with excellent interpersonal and communication skills. Looking to leverage my skill set
                and accomplishment with a new position in cloud computing or security.</p>
        </div>
        <h4>Skills</h4>
        <div class="container">
            <p><b>SKILLS</b></p>
            <div class="row ">
                <div class="col-md-4 col-sm-12">
                    <h4><b>AWS</b></h4>
                    <div class="card w3-card-2">
                        <div class="card-body">
                            <ul class=" list-group list-group-flush w3-ul">
                                <li>EC2</li>
                                <li>S3</li>
                                <li>IAM</li>
                                <li>RDS</li>
                                <li>VPC</li>
                                <li>ROUTE53</li>
                                <li>ELASTIC BEANSTALK</li>
                                <li>CLOUDWATCH</li>
                                <li>CLOUDTRAIL</li>
                                <li>CLOUDFORMATION (IaC)</li>
                                <li>CLOUDFRONT</li>
                                <li>LOAD BALANCER</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4>DEVOPS</h4>
                    <div class="card w3-card-2">
                        <div class="card-body">
                            <ul class="list-group list-group-flush w3-ul">
                                <li>GIT</li>
                                <li>Linux</li>
                                <li>RedHat7/8</li>
                                <li>FireWall</li>
                                <li>Maven</li>
                                <li>Jenkins</li>
                                <li>Tomcat</li>
                                <li>LAMP</li>
                                <li>Docker</li>
                                <li>Ansible</li>
                                <li>Kubernetes</li>
                                <li>Terraform (IaC)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h4><b>WEB DEVELOPMENT</b></h4>
                    <div class="card w3-card-2">
                        <div class="card-body">
                            <ul class=" list-group list-group-flush w3-ul">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JAVASCRIPT</li>
                                <li>BOOTSTRAP</li>
                                <li>W3CSS</li>
                                <li>W3JS</li>
                                <li>JQUERY/UI</li>
                                <li>PHP</li>
                                <li>PYHON</li>
                                <li>LARAVEL</li>
                                <li>DJANGO</li>
                                <li>MYSQL</li>
                                <li>SQL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4>Experience</h4>
        <div class="container">
            <p><b>Work History</b></p>
            <div class=" w3-bottombar"><b>Cloud Engineer</b>
                <div class="d-flex justify-content-between">
                    <p><b>Metro System Inc</b> <small>(EndClient Amazon)</small> Hilliard OH.</p>
                    <p>05/2019 - Present</p>
                </div>
            </div>
            <ul class="w3-ul list-group list-group-flush">
                <li>Working in AWS cloud computing platform and many dimensions of scalability including EC2,
                    S3, EBS, VPC, ELB, AMI, RDS, IAM, Route 53, Auto scaling, Cloud Front, Cloud Watch, Cloud Trail, Cloud
                    Formation, Security Groups</li>
                <li>Grant permissions, policies and roles to users and groups using AWS Identity and Access Management (IAM)
                </li>
                <li>Responsible for creating and removing files and directories in Linux servers</li>
                <li>Install and Setup Web Servers (Apache), DB Server (MySQL).</li>
                <li>Monitoring Production Server Health of different parameters (CPU Load, Physical Memory, Swap Memory,
                    Hard disk,
                    MySQL service, Http service and response time) via Nagios.</li>
                <li>Manipulation of shell scripts; php scripts and python scripts, terraform scripts during migration and
                    db. connection.</li>
            </ul>
            <hr class="py-2">
            <div class=" w3-bottombar"><b>Solution Architect</b>
                <div class="d-flex justify-content-between">
                    <p><b>Trillium Staffing Inc</b> <small>(EndClient microcenter)</small> Hilliard OH.</p>
                    <p>06/2017 - 05/2019</p>
                </div>
            </div>
            <ul class="w3-ul list-group list-group-flush">
                <li>Setup/Managed Linux Servers on Amazon (EC2, EBS, ELB, SSL, Security Groups, RDS and IAM).</li>
                <li>Setup/Managed VPC, Subnets; make the connection between different zones; Blocking suspicious Ip/subnet
                    via ACL.</li>
                <li>Setup/Managed CDN on Amazon CloudFront (Origin Path: Server / S3) to improve site</li>
                <li>Created/Managed buckets on S3 (CLI) and store database and logs backup, upload images for CDN serve.
                </li>
                <li>Setup/Managed Databases on Amazon RDS. Monitoring servers through Amazon CloudWatch, SNS.</li>
                <li>Creating/Managed DNS records on Amazon Route 53 and go-daddy panel.</li>
                <li>Creating/Managed AMI/Snapshots/Volumes, Upgrade/downgrade AWS resources (CPU, Memory, EBS)</li>
                <li>Created AWS Instances and Resources Bills.</li>
            </ul>
        </div>
        <h4>Networking, Security Tools, Dynamic Routing Protocol</h4>
        <div class="container">
            <div class="card w3-card-2">
                <div class="card-body">
                    <ul class="w3-ul list-group list-group-flush">
                        <li>Nmap, Nessus, Wireshark, </li>
                        <li>NMAP, TCP/IP, Active Directory Directory Services,</li>
                        <li> IDS, IPS, DNS, DHCP, OSI and TCP/IP model,</li>
                        <li>Site to Site VPN, SSL VPN, AAA, VLAN. </li>
                        <li> CDP, NFS, SMTP HTTP/S, SSH, SSL, TLS, ACL</li>
                        <li> UDP, SNMP, TFTP, FTP NAT, IPV4 </li>
                        <li>IPV6 Network Design, load Balancer, F5 </li>
                    </ul>
                </div>
            </div>
        </div>
        <h4>Certification & Education</h4>
        <div class="container">
            <p><b>Summary Statement</b></p>
        </div>
        <h4>Reference</h4>
        <div class="container">
            <p><b>Personal References</b></p>
            <ul class="w3-ul list-group list-group-flush">
                <li>Contact me on linkedin and I will provide you with the necessary information needed</li>
                <li><a href="https://linkedin.com/in/dabaclovis" class="btn btn-primary text-white" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    {{-- end Skill Section --}}
@endsection

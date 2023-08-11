<!DOCTYPE html>
<html>
<head>
  <title>Uvindu Abeydewa</title>
  <style>
        
        #projects {
            background-color: #f4f4f4;
            padding: 20px;
        }

       
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: white;
          }

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #333;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        
        .table-container {
            display: flex;
            justify-content: center;
        }
  </style>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
</head>

<body>
  <header>
    <h1>UVINDU<br> ABEYDEWA</h1>
    <h3>Chartered Accountant</h3>
    <p><br><br><br><br><br></p>
    <div class="slider-container">
    <div class="slider">
      <img id="sliderImage" src="my_photo.png" alt="Slider Image 1">
    </div>
  </div>
    <nav>
      
      <ul>
      <li><a href="welcome.php">Log Out</a></li>
      
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#awards">Awards</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#projects">Projects Details</a></li>

      </ul>
    </nav>
  </header>
  
  <main>
    <section id="about" class="section-about">
      
      <h2>About Us</h2>
      <p>"Welcome! I'm Uvindu Abeydewa, an experienced auditor dedicated to ensuring the highest standards of financial integrity and regulatory compliance. With a passion for accuracy and meticulous attention to detail, I have 6 years of expertise in auditing and financial analysis.

        As an auditor, my primary goal is to provide a comprehensive and objective evaluation of financial records, internal controls, and operational processes. I possess a deep understanding of accounting principles, financial reporting standards, and industry regulations, allowing me to deliver thorough and reliable audits.
        
        I have worked with a diverse range of clients, including multinational corporations, small businesses, and non-profit organizations. I approach each audit engagement with a commitment to independence, professionalism, and confidentiality. By conducting in-depth assessments, I identify potential risks, uncover financial irregularities, and offer actionable recommendations to improve financial management practices.
        
        Throughout my career, I have developed strong analytical and problem-solving skills, enabling me to navigate complex financial data and identify areas for improvement. I excel in communicating audit findings and insights to stakeholders, ensuring a clear understanding of the audit process and the significance of the results.
        
        In addition to technical proficiency, I value building trusted relationships with my clients. I believe in fostering open and transparent communication to create a collaborative environment that promotes the exchange of ideas and best practices.
        
        I stay abreast of industry trends, regulatory changes, and emerging technologies to continuously enhance my auditing expertise. I am dedicated to maintaining professional integrity and upholding the highest ethical standards in all aspects of my work.
        
        Thank you for visiting my profile. If you are seeking an experienced and reliable auditor committed to delivering accurate and insightful audits, I would be delighted to discuss how I can assist you and contribute to your organization's financial success."</p>
    </section>
  
    <section id="services" class="section-services">
      <h2>Our Services</h2>
      <p>We offer : <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Financial statement audits 
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp External audits 
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Compliance audits 
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Consultation 
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Forcasting 
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Budgeting </p>
    </section>
  
    <section id="awards" class="section-awards">
      <h2>Awards</h2>
      <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Best Auditor - 2021 ( CA Sri Lanka)
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Finance Director of The Year - 2022 ( Managers Institute).
    <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Best young manager - 2021 ( CA Sri Lanka)
        <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Imerging Financial Personality - 2022 (SLIM) </p>
    </section>
    <section id="projects" class="section-projects">
    <div class="table-container">
  <?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'projects';
  

  $conn = mysqli_connect($host, $username, $password, $database);
  
 
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  

  $sql = "SELECT * FROM details";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
      echo "<table border='1'>";
      echo "<tr><th>ID</th><th>Title</th><th>Description</th></tr>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['ID'] . "</td>";
          echo "<td>" . $row['Title'] . "</td>";
          echo "<td>" . $row['Description'] . "</td>";
          echo "<td><a href='projects.php?id=" . $row['ID'] . "'>Update</a> | <a href='delete.php?id=" . $row['ID'] . "'>Delete</a></td>";
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No records found";
  }
  
  mysqli_close($conn);
  ?>
  </section>
      
  <section id="contact" class="section-contact">
    <h2>Contact Us</h2>
    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Email Address - uvindu@business.com
      <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Telephone - 0123-456-789
  <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Address - 48/B, Gallface, Galle.
      <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Fax - 012-8456-9823 </p>
  </section>

 
  </main>
  <footer>
    All copyrights recived
  </footer>
</body>
</html>

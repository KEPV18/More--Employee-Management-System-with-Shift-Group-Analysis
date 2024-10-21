<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- إضافة رابط لملف CSS -->
  </head>
  <body>
    <div class="header">
      More
      <small>by Ahmed Khaled</small>
    </div>
    <div class="sidebar">
      <a href="#employee-search" onclick="showTab('employee-search')">Employee Search</a>
      <a href="#shift-group-analysis" onclick="showTab('shift-group-analysis')">Shift Group Analysis</a>
      <a href="#special-task-section" onclick="showTab('special-task-section')">Special Task Section</a>
      <a href="#reports-visualization" onclick="showTab('reports-visualization')">Reports & Visualization</a>
      <a href="#settings" onclick="showTab('settings')">Settings</a>
    </div>
    <div class="content">
      <div id="employee-search" class="tab-content">
        <h2 class="text-2xl font-bold text-accent mb-4">Employee Search</h2>
        
        <!-- Search form -->
        <form class="flex flex-col md:flex-row gap-4" onsubmit="searchEmployee(event)">
          <div class="relative w-full md:w-1/2">
            <input type="email" id="employee-email" placeholder="Enter employee email" 
                class="p-2 border border-input rounded-md shadow-md focus:outline-none focus:ring focus:ring-accent textInput text-black w-full"
                list="email-suggestions" required />
            <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
            <datalist id="email-suggestions">
              <option value="employee1@example.com"></option>
              <option value="employee2@example.com"></option>
            </datalist>
          </div>
          <button type="submit" class="p-2 bg-accent text-white rounded-md shadow-md hover:bg-accent-dark">
              Search
          </button>
        </form>

        <!-- Search results section -->
        <div id="search-results" class="mt-6 p-4 bg-transparent text-white rounded-md shadow-md">
          <h3 class="text-lg font-medium text-accent mb-4">Employee Details:</h3>
          <div id="error-message" class="text-red-500 hidden"></div> <!-- إضافة عنصر لعرض رسالة الخطأ -->
          <table class="table-auto w-full mb-6">
            <thead>
              <tr>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Shift</th>
                <th class="border px-4 py-2">Tasks Completed</th>
                <th class="border px-4 py-2">Quality</th>
                <th class="border px-4 py-2">device num</th>
              </tr>
            </thead>
            <tbody id="results-body-overall">
              <!-- Results will be injected here -->
            </tbody>
          </table>

          <h3 class="text-lg font-medium text-accent mb-4">Dashboard Quality Data:</h3>
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Gulp Link</th>
                <th class="border px-4 py-2">QA Link</th>
                <th class="border px-4 py-2">Quality Percentage</th>
              </tr>
            </thead>
            <tbody id="results-body-dashboard">
              <!-- Results will be injected here -->
            </tbody>
          </table>
        </div>
      </div>

      <script>
        async function fetchOverallQualityData(sheetId, range) {
          const response = await fetch(`https://sheets.googleapis.com/v4/spreadsheets/${sheetId}/values/${range}?key=AIzaSyDctNVWQhbsQMEDfJDXI30emaTd8mtviEY`);
          const data = await response.json();
          console.log('Fetched data:', data); // عرض البيانات المستلمة في وحدة التحكم
          return data.values.map(row => ({
            deviceNumber: row[0], // العمود A
            shift: row[1],        // العمود B
            name: row[2],         // العمود C
            email: row[3],        // العمود D
            tasksCompleted: row[4], // العمود E
            quality: row[7],      // العمود H
          }));
        }

        async function fetchDashboardQualityData(sheetId, range) {
          const response = await fetch(`https://sheets.googleapis.com/v4/spreadsheets/${sheetId}/values/${range}?key=AIzaSyDctNVWQhbsQMEDfJDXI30emaTd8mtviEY`);
          const data = await response.json();
          console.log('Fetched data:', data); // عرض البيانات المستلمة في وحدة التحكم
          return data.values.map(row => ({
            email: row[0],        // العمود D
            gulpLink: row[1],     // العمود F
            qaLink: row[2],       // العمود G
            quality: `${parseFloat(row[13]) * 100}%`,      // العمود H
          }));
        }

        async function displayDashboardQualityData(sheetId, range) {
          const dashboardQualityData = await fetchDashboardQualityData(sheetId, range);
          const resultsBodyDashboard = document.getElementById('results-body-dashboard');
          resultsBodyDashboard.innerHTML = '';

          dashboardQualityData.forEach(dashboardEmployee => {
            const row = document.createElement('tr');
            const qualityPercentage = parseFloat(dashboardEmployee.quality); // تحويل الكوالتي إلى عدد عشري
            const rowClass = qualityPercentage < 75 ? 'bg-red-200' : ''; // إضافة لون الخلفية إذا كانت النسبة أقل من 75%

            row.className = rowClass; // تأكد من إضافة الكلاس هنا
            row.innerHTML = `
              <td class="border px-4 py-2">${dashboardEmployee.email}</td>
              <td class="border px-4 py-2"><a href="${dashboardEmployee.gulpLink}" target="_blank">Gulp Link</a></td>
              <td class="border px-4 py-2"><a href="${dashboardEmployee.qaLink}" target="_blank">QA Link</a></td>
              <td class="border px-4 py-2">${qualityPercentage}%</td>
            `;
            resultsBodyDashboard.appendChild(row);
          });
        }

        if (qualityPercentage < 75) {
  tr.classList.add('low-quality'); // Adding custom class for red background
}


        async function searchEmployee(event) {
          event.preventDefault(); // منع تحديث الصفحة
          const email = document.getElementById('employee-email').value;

          if (!email) {
              alert('Please enter a valid email.');
              return;
          }

          try {
              // البحث في الورقة الأولى "Overall Quality"
              const overallQualityData = await fetchOverallQualityData('18QXl65W2CwC-TBLDL4h1dxjiu6H-0tJAAbdCJWxL0Hk', 'Overall Quality');
              const resultsBodyOverall = document.getElementById('results-body-overall');
              resultsBodyOverall.innerHTML = '';

              const overallEmployee = overallQualityData.find(emp => emp.email === email);

              if (overallEmployee) {
                  const row = document.createElement('tr');
                  const overallQualityPercentage = parseFloat(overallEmployee.quality); // تحويل الكوالتي إلى عدد عشري
                  const overallRowClass = overallQualityPercentage < 75 ? 'bg-red-200' : ''; // إضافة لون الخلفية إذا كانت النسبة أقل من 75%

                  row.className = overallRowClass;
                  row.innerHTML = `
                      <td class="border px-4 py-2">${overallEmployee.email}</td> <!-- العمود D -->
                      <td class="border px-4 py-2">${overallEmployee.name}</td> <!-- العمود C -->
                      <td class="border px-4 py-2">${overallEmployee.shift}</td> <!-- العمود B -->
                      <td class="border px-4 py-2">${parseInt(overallEmployee.tasksCompleted)}</td> <!-- العمود E -->
                      <td class="border px-4 py-2">${overallEmployee.quality}</td> <!-- العمود H -->
                      <td class="border px-4 py-2">${overallEmployee.deviceNumber}</td> <!-- العمود A -->
                  `;
                  resultsBodyOverall.appendChild(row);
              } else {
                  document.getElementById('error-message').textContent = 'فشل في العثور على الموظف في بيانات الجودة العامة.';
                  document.getElementById('error-message').classList.remove('hidden');
              }

              // البحث في الورقة الثانية "Dashboard Quality Data"
              const dashboardQualityData = await fetchDashboardQualityData('18QXl65W2CwC-TBLDL4h1dxjiu6H-0tJAAbdCJWxL0Hk', 'dashboard quality data!A:N');
              const resultsBodyDashboard = document.getElementById('results-body-dashboard');
              resultsBodyDashboard.innerHTML = '';

              const dashboardEmployees = dashboardQualityData.filter(emp => emp.email === email);

              if (dashboardEmployees.length > 0) {
                  dashboardEmployees.forEach(dashboardEmployee => {
                      const row = document.createElement('tr');
                      row.innerHTML = `
                          <td class="border px-4 py-2">${dashboardEmployee.email}</td>
                          <td class="border px-4 py-2"><a href="${dashboardEmployee.gulpLink}" target="_blank">Gulp Link</a></td>
                          <td class="border px-4 py-2"><a href="${dashboardEmployee.qaLink}" target="_blank">QA Link</a></td>
                          <td class="border px-4 py-2">${dashboardEmployee.quality}</td>
                      `;
                      resultsBodyDashboard.appendChild(row);
                  });
              } else {
                  document.getElementById('error-message').textContent += ' فشل في العثور على الموظف في بيانات لوحة التحكم.';
                  document.getElementById('error-message').classList.remove('hidden');
              }

              // إظهار نتائج البحث
              const searchResultsDiv = document.getElementById('search-results');
              if (resultsBodyOverall.innerHTML || resultsBodyDashboard.innerHTML) {
                  searchResultsDiv.classList.remove('hidden');
              } else {
                  searchResultsDiv.classList.add('hidden');
                  document.getElementById('error-message').textContent = 'لا توجد نتائج مطابقة.';
                  document.getElementById('error-message').classList.remove('hidden');
              }
          } catch (error) {
              console.error('Error fetching or displaying data:', error);
              alert('An error occurred while fetching the data.');
          }
        }

        function showTab(tabId) {
          document.querySelectorAll('.tab-content').forEach(content => {
              content.classList.add('hidden');
          });
          document.getElementById(tabId).classList.remove('hidden');
        }
      </script>
      
      <div id="shift-group-analysis" class="tab-content hidden">
        <h2 class="text-2xl font-bold text-accent mb-4">Shift Group Analysis</h2>
        <form class="flex flex-col md:flex-row gap-4" onsubmit="fetchShiftGroupData(event)">
          <select id="shift-select" class="p-2 border border-input rounded-md shadow-md focus:outline-none focus:ring focus:ring-accent bg-gray-200 text-black">
            <option value="all">All Shifts</option>
            <option value="morning">Morning Shift</option>
            <option value="night">Night Shift</option> <!-- إضافة شيفت نايت -->
            <option value="overnight">Overnight Shift</option> <!-- إضافة شيفت أوفر نايت -->
          </select>
          <select id="shift-date-select" class="p-2 border border-input rounded-md shadow-md focus:outline-none focus:ring focus:ring-accent bg-gray-200 text-black" onchange="toggleDateInput('shift')">
            <option value="all">All Days</option>
            <option value="specific">Specific Day</option>
          </select>
          <input type="date" id="shift-date-input-analysis" class="p-2 border border-input rounded-md shadow-md focus:outline-none focus:ring focus:ring-accent bg-gray-200 text-black hidden" />
          <button type="submit" class="bg-primary text-foreground p-3 rounded-md shadow-lg hover:bg-primary/80 transition duration-200 button-icon">
            <i class="fas fa-eye"></i> View Group
          </button>
        </form>
        <div class="mt-4 p-4 bg-card rounded-md shadow-md" id="shift-results">
          <h3 class="text-lg font-medium text-accent">Shift Details:</h3>
          <table class="table">
            <thead>
              <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Shift Time</th>
                <th>Tasks Completed</th>
                <th>Quality</th>
                <th>Device Num</th>
              </tr>
            </thead>
            <tbody id="shift-results-body">
              <!-- Results will be injected here -->
            </tbody>
          </table>
          <p>Total Tasks Completed: <span id="total-tasks" class="text-white">0</span></p>
          <p>Average Quality Percentage: <span id="average-quality" class="text-white">0%</span></p>
        </div>
      </div>
      
      <div id="special-task-section" class="tab-content hidden">
        <h2 class="text-2xl font-bold text-accent mb-4">Special Task Section</h2>
        <div class="p-4 bg-card rounded-md shadow-md">
          <h3 class="text-lg font-medium text-accent">Issues:</h3>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Issue</th>
                <th>Task Link</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="text-white">Alice Johnson</span></td>
                <td><span class="text-white">alice.johnson@example.com</span></td>
                <td><span class="text-white">Skipped Task</span></td>
                <td><a href="#" class="text-primary">View Task</a></td>
              </tr>
              <tr>
                <td><span class="text-white">Tom Hanks</span></td>
                <td><span class="text-white">tom.hanks@example.com</span></td>
                <td><span class="text-white">0 Quality in Task</span></td>
                <td><a href="#" class="text-primary">View Task</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div id="reports-visualization" class="tab-content hidden">
        <h2 class="text-2xl font-bold text-accent mb-4">Reports and Visualization</h2>
        <div class="flex flex-col md:flex-row gap-4">
          <button class="bg-secondary text-foreground p-3 rounded-md shadow-lg hover:bg-secondary/80 transition duration-200 button-icon">
            <i class="fas fa-file-excel"></i> Export to Excel
          </button>
          <button class="bg-secondary text-foreground p-3 rounded-md shadow-lg hover:bg-secondary/80 transition duration-200 button-icon">
            <i class="fas fa-file-pdf"></i> Export to PDF
          </button>
        </div>
        <div class="mt-4">
          <h3 class="text-lg font-medium text-accent">Performance Graphs:</h3>
          <div class="bg-muted p-4 rounded-md shadow-md">
            <canvas id="performanceChart" class="w-full h-auto rounded-md shadow-sm"></canvas>
          </div>
        </div>
      </div>

      <!-- Settings Section -->
      <div id="settings" class="tab-content hidden">
        <h2 class="text-2xl font-bold text-accent mb-4">Settings</h2>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-white">Enter Password:</label>
          <input type="password" id="password" class="p-2 border border-input rounded-md shadow-md text-black bg-gray-200" />
          <button onclick="checkPassword()" class="bg-primary text-foreground p-2 rounded-md shadow-lg mt-2">Unlock</button>
        </div>
        <div id="api-key-section" class="hidden">
          <label for="api-key" class="block text-sm font-medium text-white">API Key:</label>
          <input type="text" id="api-key" class="p-2 border border-input rounded-md shadow-md text-black bg-gray-200" placeholder="Enter your API Key" />
          <button onclick="saveApiKey()" class="bg-primary text-foreground p-2 rounded-md shadow-lg mt-2">Save</button>
        </div>
      </div>
      
      <script>
        let currentApiKey = "default_api_key";  // القيمة الافتراضية في الكود
        document.getElementById('api-key').value = currentApiKey;
      
        function checkPassword() {
          const password = document.getElementById('password').value;
          if (password === '12345') {
            document.getElementById('api-key-section').classList.remove('hidden');
          } else {
            alert('Incorrect password. Please try again.');
          }
        }
      
        function saveApiKey() {
          const newApiKey = document.getElementById('api-key').value;
          
          fetch('update_api_key.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({ apiKey: newApiKey }),
          })
          .then(response => response.json())
          .then(data => {
            alert('API Key updated successfully!');
            currentApiKey = newApiKey;
          })
          .catch((error) => {
            console.error('Error:', error);
          });
        }
      </script>
      
    </div>

    <script>
      // تعيين التاريخ الافتراضي إلى تاريخ اليوم
      document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date-input').value = today;

        // استرجاع API Key من localStorage إذا كان موجود
        const savedApiKey = localStorage.getItem('apiKey');
        if (savedApiKey) {
          document.getElementById('api-key').value = savedApiKey;
        }

        // بيانات الشيفتات
        const shiftData = [
          { shift: 'Morning', quality: 90, tasks: 15 },
          { shift: 'Night', quality: 85, tasks: 11 },
          { shift: 'Overnight', quality: 80, tasks: 9 }
        ];

        // إعداد الرسم البياني
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: shiftData.map(data => data.shift),
            datasets: [
              {
                label: 'Quality',
                data: shiftData.map(data => data.quality),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
              },
              {
                label: 'Tasks Completed',
                data: shiftData.map(data => data.tasks),
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
              }
            ]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      });

      function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(content => {
          content.classList.add('hidden');
        });
        document.getElementById(tabId).classList.remove('hidden');
      }

      function toggleDateInput(section) {
        const dateSelect = section === 'employee' ? document.getElementById('date-select') : document.getElementById('shift-date-select');
        const dateInput = section === 'employee' ? document.getElementById('date-input') : document.getElementById('shift-date-input-analysis');

        if (dateSelect.value === 'specific') {
            dateInput.classList.remove('hidden'); // إظهار خانة الإدخال
        } else {
            dateInput.classList.add('hidden'); // إخفاء خانة الإدخال
        }
      }
    </script>
    <script src="script.js"></script> <!-- إضافة رابط لملف JavaScript -->
    <script>
      async function fetchShiftGroupData(event) {
        event.preventDefault(); // Prevent form submission
        const selectedShift = document.getElementById('shift-select').value;

        try {
          const overallQualityData = await fetchOverallQualityData('18QXl65W2CwC-TBLDL4h1dxjiu6H-0tJAAbdCJWxL0Hk', 'Overall Quality');
          const resultsBody = document.getElementById('shift-results-body');
          resultsBody.innerHTML = ''; // Clear previous results
          let totalTasks = 0;
          let totalQuality = 0;
          let count = 0;

          overallQualityData.forEach(emp => {
            if (selectedShift === 'all' || emp.shift.toLowerCase() === selectedShift) {
              const row = document.createElement('tr');
              const qualityPercentage = parseFloat(emp.quality);
              totalTasks += parseInt(emp.tasksCompleted);
              totalQuality += qualityPercentage;
              count++;

              row.innerHTML = `
                <td class="border px-4 py-2">${emp.email}</td>
                <td class="border px-4 py-2">${emp.name}</td>
                <td class="border px-4 py-2">${emp.shift}</td>
                <td class="border px-4 py-2">${emp.tasksCompleted}</td>
                <td class="border px-4 py-2">${qualityPercentage}%</td>
                <td class="border px-4 py-2">${emp.deviceNumber}</td>
              `;
              resultsBody.appendChild(row);
            }
          });

          // Update totals
          document.getElementById('total-tasks').textContent = totalTasks;
          document.getElementById('average-quality').textContent = count > 0 ? `${(totalQuality / count).toFixed(2)}%` : '0%';
        } catch (error) {
          console.error('Error fetching shift group data:', error);
          alert('An error occurred while fetching the data.');
        }
      }
    </script>
  </body>
</html>

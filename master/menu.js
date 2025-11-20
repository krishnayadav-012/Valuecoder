// ----------------------------------------------------------------------
// I. DATA: Single Source of Truth for Menu Content 
// FIX 3: Removed [Action] from all Industries links to prevent the 
// 'Related' cross-link box and promote them to standard column links.
// FIX: Removed extra double quotes from 'text"' key in multiple places.
// ----------------------------------------------------------------------

const baseTempUrl = vcObj.tpl_url+'/menu-v8/';
const MENU_DATA = [
  {
    id: "services", label: "Services", icon: "layers",
    l2: [
      {
        id: "ai", label: "AI & Intelligent Systems", micon: "brain-circuit", icon: "brain-circuit", color: "text-blue-500",
        tabs: [
          {
            id: "ai-strategy", label: "Strategy & Development", columns: 3,
            groups: [
              { title: "Strategy & Governance", links: [
                { href: "/ai/consulting-services-company", text: "AI Strategy Consulting" },
                /*{ href: "/ai/ai-transformation", text: "AI Transformation Program" },
                { href: "/ai/ai-readiness", text: "AI Readiness Assessment" },
                { href: "/ai/ai-governance", text: "AI Governance & Ethics" },
                { href: "/ai/ai-cost-calculator", text: "[Tool] AI Cost Calculator" }*/
              ]},
              { title: "Custom AI Development", links: [
                { href: "/ai/application-development-company", text: "AI Software Development" },
                /*{ href: "/services/ai-product-development", text: "AI Product Development" },*/
                { href: "/ai/mobile-app-development", text: "AI Mobile App Development" }
              ]},
              { title: "Enterprise AI Platforms", links: [
                { href: "/ai/salesforce-agentforce-consulting", text: "Salesforce AI Services" },
                { href: "/ai/servicenow-consulting", text: "ServiceNow AI Services" }
              ]},
              /*{ title: "AI Integration", links: [
                { href: "/ai/genai-integration", text: "GenAI Integration Services" },
                { href: "/ai/ai-integration", text: "AI Integration Services" }
              ]}*/
            ]
          },
          {
            id: "ai-genai", label: "Generative AI & Automation", columns: 4,
            groups: [
              { title: "Generative AI & LLMs", links: [
                { href: "/ai/genai-development", text: "GenAI Development" },
                { href: "/ai/genai-consulting", text: "GenAI Consulting" },
                { href: "/ai/llm-applications", text: "LLM Applications" },
                /*{ href: "/ai/rag-implementation", text: "RAG Implementation" },
                { href: "/ai/llm-fine-tuning", text: "LLM Fine-Tuning" },
                { href: "/ai/prompt-engineering", text: "Prompt Engineering" },*/
                { href: "/ai/stable-diffusion", text: "Stable Diffusion Development" },
                /*{ href: "/hire/genai-developers", text: "[Action] Hire GenAI Developers" }*/
              ]},
              { title: "Intelligent Automation", links: [
                { href: "/ai/ai-agent-development", text: "AI Agent Development" },
                { href: "/ai/ai-agents-orchestration", text: "AI Agents & Orchestration" },
                /*{ href: "/ai/ai-process-automation", text: "AI Process Automation" },
                { href: "/ai/ai-powered-rpa", text: "AI-Powered RPA" },
                { href: "/ai/rule-based-rpa", text: "Rule-Based RPA" },*/
                { href: "/ai/enterprise-automation", text: "Enterprise Automation" }
              ]},
              { title: "Conversational AI", links: [
                { href: "/chatbot-development-company", text: "Chatbot Development Company" },
                { href: "/ai/customer-support-chatbot-solutions", text: "Customer Support Chatbots" },
                { href: "/ai/ecommerce-chatbot-solutions", text: "eCommerce Chatbot Solutions" },
                { href: "/ai/recruitment-chatbot-solutions", text: "Recruitment Chatbot Solutions" },
                { href: "/ai/food-ordering-chatbot-solutions", text: "Food Ordering Chatbots" },
                { href: "/ai/appointment-booking-chatbot-solutions", text: "Appointment Booking Chatbots" }
              ]},
              { title: "Automation Tools", links: [
                /*{ href: "/ai/workflow-automation-tools", text: "Workflow Automation Hub" },*/
                { href: "/ai/jira-automation", text: "Jira Automation" },
                { href: "/ai/microsoft-power-automate", text: "Microsoft Power Automate" },
                /*{ href: "/ai/salesforce-flow", text: "Salesforce Flow Automation" }*/
              ]}
            ]
          },
          {
            id: "ai-ml", label: "Data & ML Engineering", columns: 4,
            groups: [
              { title: "Machine Learning", href:'/machine-learning', links: [
                { href: "/ai/machine-learning", text: "Machine Learning Development" },
                { href: "/ai/mlops-services", text: "MLOps Services" },
                /*{ href: "/ai/llmops-services", text: "LLMOps Services" },*/
                { href: "/ai/automl-development", text: "AutoML Development" },
                { href: "/ai/adaptive-ai", text: "Adaptive AI Development" },
                { href: "/ai/transformer-models", text: "Transformer Model Development" },
                /*{ href: "/hire/ai-ml-engineers", text: "[Action] Hire AI & ML Engineers" }*/
              ]},
              { title: "Data Processing", links: [
                { href: "/ai/data-engineering", text: "Data Engineering & Platforms" },
                /*{ href: "/ai/vector-databases", text: "Vector Databases" },
                { href: "/ai/nlp-development", text: "NLP Development" },*/
                { href: "/ai/computer-vision", text: "Computer Vision" }
              ]},
              { title: "Analytics & Testing", links: [
                { href: "/ai/data-analytics", text: "Data Analytics" },
                { href: "/ai/business-intelligence", text: "Business Intelligence" },
                /*{ href: "/ai/ai-model-testing", text: "AI Model Testing" }*/
              ]},
              { title: "Hidden Links", links: [ /* Placeholder for alignment */ ] }
            ]
          },
          /*{
            id: "ai-usecases", label: "Use Cases", columns: 4,
            groups: [
              { title: "By Business Function", links: [
                { href: "/ai/use-cases/customer-service", text: "AI for Customer Service" },
                { href: "/ai/use-cases/sales-marketing", text: "AI for Sales & Marketing" },
                { href: "/ai/use-cases/operations", text: "AI for Operations" },
                { href: "/ai/use-cases/finance", text: "AI for Finance & Accounting" },
                { href: "/ai/use-cases/hr", text: "AI for HR & Talent" },
                { href: "/ai/use-cases/product", text: "AI for Product Development" }
              ]},
              { title: "Hidden Links", links: [] },
              { title: "Hidden Links", links: [] },
              { title: "Hidden Links", links: [] }
            ]
          }*/
        ]
      },
      {
        id: "product", label: "Product Engineering", micon:"package", icon: "package", color: "text-green-500",
        tabs: [
          {
            id: "prod-services", label: "By Service", columns: 4,
            groups: [
              { title: "Discovery & Design", links: [
                /*{ href: "/services/product-engineering", text: "[Hub] Discovery & Design" },*/
                { href: "/services/product-discovery", text: "Product Discovery & Roadmapping" },
                { href: "/services/ui-ux-design", text: "UI/UX Design Services" },
                { href: "/hire/technical-architects", text: "Solution Architecture & Design" },
                /*{ href: "/services/product-engineering-process", text: "Product Engineering Process" }*/
              ]},
              { title: "Full-Cycle Development", links: [
                /*{ href: "/services/software-development", text: "[Hub] Full-Cycle Development" },*/
                { href: "/services/software-product-development", text: "Software Product Development" },
                { href: "/services/custom-software-development", text: "Custom Software Development" },
                { href: "/services/ai-product-development", text: "AI Product Development" },
                { href: "/services/mvp-development", text: "MVP Development" },
                /*{ href: "/services/lifecycle-governance", text: "Product Lifecycle Governance" }*/
              ]},
              { title: "Platform Engineering", links: [
                /*{ href: "/services/web-app-development", text: "[Hub] Platform Engineering" },*/
                { href: "/services/web-app-development", text: "Web Application Development" },
                { href: "/services/mobile-app-development", text: "Mobile App Development" },
                { href: "/services/enterprise-app-development", text: "Enterprise Application Development" },
                /*{ href: "/hire/frontend-developers", text: "[Action] Hire App & Web Developers" }*/
              ]},
              { title: "Modern Architecture", links: [
                /*{ href: "/services/microservices", text: "[Hub] Modern Architecture" },*/
                { href: "/services/microservices", text: "Microservices Architecture" },
                { href: "/services/saas-development", text: "SaaS Product Development" },
                { href: "/services/api-development", text: "API Development & Integration" }
              ]}
            ]
          },
          {
            id: "prod-role", label: "By Role/ICP", columns: 3,
            groups: [
              { title: "For Startups", links: [
                { href: "/solutions/startups/mvp", text: "MVP Development" },
                { href: "/solutions/startups/strategy", text: "Product Discovery" },
                { href: "/services/ui-ux-design", text: "UI/UX Design Services" }
              ]},
              { title: "For Scale-ups", links: [
                { href: "/services/custom-software-development", text: "Custom Software Development" },
                { href: "/services/microservices", text: "Microservices Architecture" },
                { href: "/services/api-development", text: "API Development" }
              ]},
              { title: "For Enterprises", links: [
                { href: "/services/enterprise-app-development", text: "Enterprise Application Development" },
                /*{ href: "/services/lifecycle-governance", text: "Product Lifecycle Governance" },*/
                { href: "/services/software-architecture", text: "Software Architecture" }
              ]}
            ]
          }
        ]
      },
      {
        id: "consulting", label: "Consulting & Advisory", icon: "compass", color: "text-purple-500",
        columns: 4,
        groups: [
          { title: "Technology Strategy", links: [
            /*{ href: "/services/consulting", text: "[Hub] Technology Strategy" },*/
            { href: "/services/technology-strategy", text: "Technology Strategy & Roadmap" },
            { href: "/services/solution-architecture", text: "Solution Architecture Consulting" },
            { href: "/services/cto-as-a-service", text: "CTO-as-a-Service" },
            { href: "/services/product-feasibility", text: "Product Feasibility Studies" },
            /*{ href: "/services/technical-program-management", text: "Technical Program Management" }*/
          ]},
          { title: "Modernization & Transformation", links: [
            /*{ href: "/services/digital-transformation", text: "[Hub] Modernization & Transformation" },*/
            { href: "/services/digital-transformation", text: "Digital Transformation" },
            { href: "/services/legacy-modernization", text: "Legacy Modernization" },
            { href: "/services/application-modernization", text: "Application Modernization" },
            { href: "/services/devops-transformation", text: "DevOps Transformation" }
            /*{ href: "/services/data-modernization", text: "Data Modernization" },
            { href: "/services/modernization-planning", text: "Modernization Planning" },
            */
          ]},
          { title: "Process & QA Advisory", href:"/software-quality-assurance-testing-services", links: [
            /*{ href: "/services/qa-consulting", text: "[Hub] Process & QA Advisory" },*/
            { href: "/services/qa-consulting", text: "QA Strategy Consulting" },
            { href: "/services/process-automation", text: "Process Automation Strategy" },
            /*{ href: "/services/qa-process-optimization", text: "QA Process Optimization" },*/
            { href: "/agile-consulting", text: "Agile Transformation Consulting" },
            /*{ href: "/hire/solution-architects", text: "[Action] Hire Solution Architects" }*/
          ]},
          { title: "AI & Innovation (Cross-links)", links: [
            /*{ href: "/ai/ai-strategy", text: "[Hub] AI & Innovation (Cross-links)" },*/
            { href: "/ai/ai-strategy", text: "AI Strategy Consulting" },
            /*{ href: "/ai/ai-transformation", text: "AI Transformation Program" },
            { href: "/ai/ai-readiness", text: "AI Readiness Assessment" }*/
          ]}
        ]
      },
      {
        id: "cloud", label: "Cloud & Platforms", icon: "cloud", color: "text-sky-500",
        columns: 4,
        groups: [
          { title: "Cloud Engineering", links: [
            /*{ href: "/services/cloud-devops", text: "[Hub] Cloud Engineering" },*/
            { href: "/services/cloud-devops", text: "Cloud & DevOps Services" },
            { href: "/services/devsecops", text: "DevSecOps Services" },
            /*{ href: "/services/cloud-operations", text: "Cloud Operations" },*/
            { href: "/services/cloud-migration", text: "Cloud Migration" },
            /*{ href: "/services/cloud-cost-optimization", text: "Cloud Cost Optimization" },*/
            { href: "/services/finops-services", text: "FinOps Services" },
            { href: "/services/kubernetes", text: "Containerization & Kubernetes" },
            { href: "/services/cloud-infrastructure-services", text: "Cloud Infrastructure Services" },
            /*{ href: "/hire/cloud-devops-engineers", text: "[Action] Hire Cloud & DevOps Engineers" }*/
          ]},
          { title: "Salesforce Platform", links: [
            /*{ href: "/services/salesforce-development", text: "[Hub] Salesforce Platform" },*/
            { href: "/services/salesforce-development", text: "Salesforce Development" },
            { href: "/services/salesforce-ai-services", text: "Salesforce AI Services" },
            { href: "/services/salesforce-integration", text: "Salesforce Integration" },
            { href: "/services/salesforce-consulting", text: "Salesforce Consulting" }
          ]},
          { title: "ServiceNow Platform", links: [
            /*{ href: "/services/servicenow-development", text: "[Hub] ServiceNow Platform" },*/
            { href: "/services/servicenow-development", text: "ServiceNow Development" },
            { href: "/services/servicenow-ai-services", text: "ServiceNow AI Services" },
            { href: "/services/servicenow-integration", text: "ServiceNow Integration" },
            { href: "/services/servicenow-consulting", text: "ServiceNow Consulting" }
          ]},
          { title: "Enterprise Platforms & Integration", links: [
            /*{ href: "/services/system-integration", text: "[Hub] Enterprise Platforms & Integration" },
            { href: "/services/system-integration", text: "System Integration Services" },
            { href: "/services/ipaas-connectors", text: "iPaaS & Connectors" },*/
            { href: "/iot-development-company", text: "IoT Development" },
            { href: "/blockchain-development-company", text: "Blockchain Development" },
            { href: "/ar-vr-development-company", text: "AR/VR Development" },
            { href: "/microsoft-dynamics/365-consulting", text: "Microsoft Dynamics 365" }
          ]}
        ]
      },
      {
        id: "security", label: "Security & Compliance", icon: "shield-check", color: "text-red-500",
        tabs: [
            {
                id: "sec-services", label: "Security Services", columns: 1,
                groups: [
                    /*{ title: "Core Security", links: [
                        { href: "/services/cybersecurity", text: "[Hub] Core Security" },
                        { href: "/services/cybersecurity", text: "Cybersecurity Services" },
                        { href: "/services/cloud-security", text: "Cloud Security" },
                        { href: "/services/application-security", text: "Application Security" },
                        { href: "/services/api-security", text: "API Security" },
                        { href: "/services/devsecops", text: "DevSecOps Services" }
                    ]},*/
                    { title: "Audits & Testing", links: [
                        /*{ href: "/services/security-audits", text: "[Hub] Audits & Testing" },
                        { href: "/services/security-audits", text: "Security Audits & Pen Testing" },*/
                        { href: "/services/security-testing", text: "Security Testing" },
                        /*{ href: "/ai/ai-model-testing", text: "AI Model Testing" },
                        { href: "/hire/cloud-security-engineers", text: "[Action] Hire Security Engineers" }*/
                    ]},
                    /*{ title: "Hidden Links", links: [] } */
                ]
            },
            {
                id: "sec-compliance", label: "Compliance Services", columns: 1,
                groups: [
                    { title: "Compliance & Governance", links: [
                        /*{ href: "/services/compliance-consulting", text: "[Hub] Compliance & Governance" },
                        { href: "/services/compliance-consulting", text: "Compliance Consulting (SOC2, ISO, HIPAA)" },*/
                        { href: "/it-compliance-services", text: "IT Compliance" },
                        { href: "/solutions/risk-management", text: "Risk Audit" },
                        /*{ href: "/services/quality-governance", text: "Quality Governance" }*/
                    ]}
                ]
            }
        ]
      },
      {
        id: "teams", label: "Team Models & Engagement", icon: "users", color: "text-yellow-500",
        columns: 3,
        groups: [
          { title: "Flexible Augmentation", links: [
            /*{ href: "/services/team-models", text: "[Hub] Flexible Augmentation" },*/
            { href: "/services/team-augmentation", text: "Team Augmentation" },
            /*
            { href: "/services/managed-development-services", text: "Managed Development Services" },
            { href: "/services/project-rescue", text: "Project Rescue" },
            { href: "/resources/team-calculator", text: "[Tool] Team Size Calculator" }
            */
          ]},
          { title: "Managed Delivery Teams", links: [
            /*{ href: "/services/dedicated-teams", text: "[Hub] Managed Delivery Teams" },*/
            { href: "/services/dedicated-teams", text: "Dedicated Development Teams" },
            /*{ href: "/services/managed-agile-pods", text: "Managed Agile Pods" },
            { href: "/services/product-extension-pods", text: "Product Extension Pods" }*/
          ]},
          { title: "Strategic Models", links: [
            /*{ href: "/pricing/dedicated-teams", text: "[Hub] Strategic Models" },*/
            { href: "/services/offshore-development-center", text: "Offshore Development Center" },
            /*{ href: "/services/build-operate-transfer", text: "Build-Operate-Transfer" },
            { href: "/pricing/outcome-based", text: "Outcome-Based Engagement" }*/
          ]},
          /*{ title: "Governance & Playbooks", links: [
            { href: "/services/engagement-playbooks", text: "[Hub] Governance & Playbooks" },
            { href: "/services/delivery-governance", text: "Delivery Governance" },
            { href: "/services/reporting-standards", text: "Reporting Standards" },
            { href: "/services/velocity-slas", text: "Velocity & Quality SLAs" },
            { href: "/services/cv-first", text: "CV-First to Pod Conversion" },
            { href: "/services/rapid-scaling", text: "Rapid Team Scaling" },
            { href: "/services/quality-governance", text: "Quality Governance" },
            { href: "/services/security-governance", text: "Security Governance" },
            { href: "/hire/engagement-models", text: "[Action] Explore Engagement Models" }
          ]}*/
        ]
      },
      {
        id: "qa", label: "Quality Assurance & Testing", icon: "clipboard-check", color: "text-orange-500",
        tabs: [
          {
            id: "qa-functional", href:"/functional-software-testing", label: "Functional Testing", columns: 1,
            groups: [
              { title: "Functional Testing", links: [
                /*{ href: "/services/qa-testing", text: "[Hub] Functional Testing" },
                { href: "/services/manual-testing", text: "Manual QA Testing" },*/
                { href: "/services/regression-testing", text: "Regression Testing" },
                /*{ href: "/services/uat-testing", text: "User Acceptance Testing" }*/
              ]}
            ]
          },
          {
            id: "qa-non-functional", label: "Non-Functional Testing", columns: 1,
            groups: [
              { title: "Non-Functional Testing", links: [
                /*{ href: "/services/qa-testing", text: "[Hub] Non-Functional Testing" },*/
                { href: "/software-performance-testing", text: "Performance Testing" },
                /*{ href: "/services/load-testing", text: "Load & Stress Testing" },*/
                { href: "/security-testing", text: "Security Testing" },
                /*{ href: "/services/accessibility-testing", text: "Accessibility Testing" },*/
                { href: "/penetration-testing", text: "Penetration Testing" }
              ]}
            ]
          },
          {
            id: "qa-automation", label: "Test Automation", columns: 1,
            groups: [
              { title: "Test Automation", links: [
                /*{ href: "/services/qa-testing", text: "[Hub] Test Automation" },*/
                { href: "/software-testing-automation", text: "Automated Testing Services" },
                { href: "/cloud-services/continuous-integration-continous-delivery", text: "CI/CD Integration" }
              ]}
            ]
          },
          {
            id: "qa-specialized", label: "Specialized Testing", columns: 1,
            groups: [
              { title: "Specialized Testing", links: [
                /*{ href: "/services/qa-testing", text: "[Hub] Specialized Testing" },*/
                /*{ href: "/ai/ai-model-testing", text: "AI/ML Model Testing" },*/
                { href: "/api-testing-services", text: "API Testing" },
                { href: "/mobile-app-testing-services", text: "Mobile App Testing" },
                /*{ href: "/hire/qa-engineers", text: "[Action] Hire QA & Testing Engineers" }*/
              ]}
            ]
          }
        ]
      }
    ]
  },
  {
    id: "hire", label: "Hire", icon: "users",
    l2: [
      {
        id: "hire-app", label: "App & Web Development", icon: "monitor-smartphone", color: "text-blue-500",
        tabs: [
          { id: "hire-front", label: "Frontend", columns: 1, groups: [
            { title: "Frontend Developers", href:"/hire-developers/hire-front-end-developers", links: [
              { href: "/hire-developers/hire-reactjs-developers", text: "Hire React Developers" },
              { href: "/hire-developers/hire-angularjs-developers", text: "Hire Angular Developers" },
              { href: "/hire-developers/hire-vuejs-developers", text: "Hire Vue.js Developers" },
              { href: "/hire/next-js-developers", text: "Hire Next.js Developers" },
              { href: "/hire-developers/hire-typescript-developers", text: "Hire TypeScript Developers" }
            ]}
          ]},
          { id: "hire-back", label: "Backend", columns: 1, groups: [
            { title: "Backend Developers", href:"/hire-developers/hire-backend-developers", links: [              
              { href: "/hire-developers/hire-python-developers", text: "Hire Python Developers" },
              { href: "/hire-developers/hire-java-developers", text: "Hire Java Developers" },
              { href: "/hire-developers/hire-nodejs-developers", text: "Hire Node.js Developers" },
              { href: "/hire-developers/hire-php-developers", text: "Hire PHP Developers" },
              { href: "/hire-developers/hire-dotnet-developers", text: "Hire .NET Developers" },
              { href: "/hire-developers/hire-golang-web-developers", text: "Hire Golang Developers" },
              { href: "/hire-developers/hire-ror-developers", text: "Hire Ruby Developers" },
              { href: "/hire-developers/hire-graphql-developers", text: "Hire GraphQL Developers" },
              { href: "/hire-developers/hire-api-developers", text: "Hire API Developers" },

            ]}
          ]},
          { id: "hire-mobile", label: "Mobile", columns: 1, groups: [
            { title: "Mobile App Developers", href:"/hire-developers/hire-mobile-app-developers", links: [
              { href: "/hire-developers/hire-ios-developers", text: "Hire iOS Developers" },
              { href: "/hire-developers/hire-android-developers", text: "Hire Android Developers" },
              { href: "/hire-developers/hire-flutter-developers", text: "Hire Flutter Developers" },
              { href: "/hire-developers/hire-react-native-developers", text: "Hire React Native Developers" },
              { href: "/cross-platform-app-development-services", text: "Hire Cross-Platform Developers" }
            ]}
          ]},
          { id: "hire-full", label: "Full Stack", columns: 1, groups: [
            { title: "Full Stack Developers", href:"/hire-developers/hire-full-stack-developers", links: [              
              { href: "/hire-developers/hire-mern-stack-developers", text: "Hire MERN Stack Developers" },
              { href: "/hire-developers/hire-mean-stack-developers", text: "Hire MEAN Stack Developers" }
            ]}
          ]},
          { id: "hire-qa", label: "QA & Testing", columns: 1, groups: [
            { title: "QA & Testing Engineers", href:"/hire-developers/software-qa-testers-india", links: [              
            { href: "/software-testing-automation", text: "Hire Automation Testers" },
            { href: "/software-performance-testing", text: "Hire Performance Testers" },
            { href: "/security-testing", text: "Hire Security Testers" }
            ]}
          ]}
        ]
      },
      {
        id: "hire-ai", label: "Data & AI", icon: "brain", color: "text-sky-500",
        tabs: [
          { id: "hire-data-mlops", label: "Data Engineering & MLOps", columns: 1, groups: [
            { title: "Data & MLOps Professionals", href:"/data-engineering", links: [              
              { href: "/hire/data-engineers", text: "Hire Data Engineers" },
              { href: "/hire-developers/hire-data-scientists", text: "Hire Data Scientists" },
              { href: "/hire/automl-developers", text: "Hire MLOps Engineers" }
            ]}
          ]},
          { id: "hire-ai-genai", label: "Core AI & GenAI", columns: 1, groups: [
            { title: "AI/ML & GenAI Experts", links: [              
              { href: "/hire-developers/hire-ai-engineers", text: "Hire AI/ML Engineers" },
              { href: "/hire/ai-agent-developer", text: "Hire AI Agent Developers" }
            ]}
          ]}
        ]
      },
      {
        id: "hire-cloud", label: "Cloud & Enterprise", icon: "cloud-cog", color: "text-orange-500",
        tabs: [
          { id: "hire-infra", label: "Cloud & Infrastructure", columns: 3, groups: [
            { title: "Platforms", links: [
              { href: "/hire-developers/hire-aws-developers", text: "Hire AWS Engineers" },
              { href: "/hire-developers/hire-azure-developers", text: "Hire Azure Engineers" },
              { href: "/hire/cloud-developers", text: "Hire GCP Engineers" },

            ]},
            { title: "Practices", links: [              
              { href: "/hire-developers/hire-devops-developers", text: "Hire DevOps Engineers" }              
            ]},
            { title: "Specialized", links: [              
              { href: "/hire/kubernetes-engineers", text: "Hire Kubernetes Engineers" }              
            ]}
          ]},
          { id: "hire-enterprise", label: "Enterprise Tech", columns: 3, groups: [
            { title: "CRM & ITSM", links: [
              { href: "/hire/salesforce-developer", text: "Hire Salesforce Professionals" },
              { href: "/hire/servicenow-developers", text: "Hire ServiceNow Professionals" },
              { href: "/hire/microsoft-dynamics-365-consultant", text: "Hire Dynamics 365 Developers" }
            ]},
            { title: "ERP & PaaS", links: [
              { href: "/hire/sap-developers", text: "Hire SAP Developers" },
              { href: "/microsoft-power-platform", text: "Hire Power Platform Professionals" },
              { href: "/hire-developers/hire-power-bi-developer-consultants", text: "Hire Power BI Developers" },
              { href: "/hire/sharepoint-consultants", text: "Hire SharePoint Developers" }

            ]}
          ]}
        ]
      },
      {
        id: "hire-specialized", label: "Specialized Roles", icon: "layout-template", color: "text-yellow-500",
        columns: 2,
        groups: [
          { title: "Design & Architecture", links: [
            { href: "/hire/technical-architects", text: "Hire Solution Architects" }
          ]},
          { title: "Emerging Tech Developers", links: [
            { href: "/hire-developers/hire-blockchain-developers", text: "Hire Blockchain Developers" },
            { href: "/hire-developers/hire-rpa-developers", text: "Hire RPA Developers" },
            { href: "/hire-developers/hire-augmented-reality-developers", text: "Hire AR/VR Developers" },
            { href: "/hire-developers/hire-iot-developers", text: "Hire IoT Developers" }
          ]}
        ]
      },
      {
        id: "hire-engagement", label: "Engagement Options", icon: "handshake", color: "text-green-500",
        columns: 1,
        groups: [
          { title: "Engagement Options", links: [
            { href: "/hire-developers", text: "Hire Individuals" },
            { href: "/dedicated-development-teams", text: "Hire Teams" },

          ]}
        ]
      }
    ]
  },
  {
    id: "solutions", label: "Solutions", icon: "lightbulb",
    l2: [
      {
        id: "solutions-startups", label: "For Startups", icon: "rocket", color: "text-red-500",
        columns: 1,
        groups: [{ title: "Startup Solutions", href:"/early-growth-startup-solutions", links: [
          { href: "/startup-consulting-services", text: "Product Feasibility Studies" },
          { href: "/mvp-app-development-company", text: "Rapid MVP in 90 Days" },
          { href: "/discovery-phase-process", text: "Product Strategy & Validation" },
          { href: "/cto-as-a-service", text: "On-Demand CTO" },
          { href: "/outsource-software-product-development-services", text: "Build Investor-Ready Products" },
          { href: "/discovery-phase-process", text: "Validate Ideas Before Big Spend" },
          { href: "/ai/consulting-services-company", text: "AI Pilot Program" }
        ]}]
      },
      {
        id: "solutions-scaleups", label: "For Scale-ups", icon: "chart-bar-big", color: "text-blue-500",
        columns: 1,
        groups: [{ title: "Scale-up Solutions", href:"/scale-startup-solutions", links: [
          { href: "/it-strategy-consulting-firms", text: "Technology Strategy & Roadmap" },
          { href: "/cloud-services/devops-consulting", text: "Cloud & DevOps Acceleration" },
          { href: "/dedicated-development-teams", text: "Scale Teams Fast" },
          { href: "/application-modernization", text: "Technology Modernization Planning" }
        ]}]
      },
      {
        id: "solutions-enterprises", label: "For Enterprises", icon: "building", color: "text-indigo-500",
        columns: 1,
        groups: [{ title: "Enterprise Solutions", href:"/enterprise-it-operations-services", links: [
          { href: "/it-compliance-services", text: "Global Compliance Management" },
          { href: "/digital-transformation-services", text: "Digital Transformation" }
        ]}]
      },
      {
        id: "solutions-regulatory", label: "For Regulated Industries", icon: "scale", color: "text-gray-500",
        columns: 1,
        groups: [{ title: "Regulatory Solutions", links: [
          { href: "/it-compliance-services", text: "Compliance Management" },
          { href: "/security-testing", text: "Enterprise Security" },
          { href: "/solutions/risk-management", text: "Transform Without Risk" },

        ]}]
      },
      {
        id: "solutions-specialized", label: "Specialized Solutions", icon: "cpu", color: "text-green-500",
        columns: 2,
        groups: [
          { title: "For ISVs (Product Companies)", href:"/industries/isv-software-development-services", links: [
            { href: "/startup-product-development", text: "Product Development Acceleration" },
            { href: "/api-development-services", text: "API & Integration Strategy" },

          ]},
          { title: "For Digital Agencies", links: [
            { href: "/white-label-services", text: "White-Label Development" }            
          ]}
        ]
      }
    ]
  },
  {
    id: "industries", label: "Industries", icon: "building-2",
    l2: [
      {
        id: "industries-tech", label: "Technology & Media", icon: "cpu", color: "text-blue-500",
        columns: 2,
        groups: [
          { title: "Technology & Media Industries", links: [
            { href: "/industries/media-software-development-services", text: "Media & Entertainment" },
            { href: "/industries/education-elearning-software-development", text: "Education & EdTech" },

          ]},
          // FIX 3: Removed [Action] from all AI links in Industries
          { title: "AI Solutions", links: [
            { href: "/ai/education", text: "AI in Education" },
            { href: "/ai/marketing-advertising", text: "AI in Marketing" }
          ]}
        ]
      },
      {
        id: "industries-finance", label: "Finance & Regulated", icon: "landmark", color: "text-green-500",
        columns: 2,
        groups: [
          { title: "Finance & Regulated Industries", links: [
            { href: "/industries/fintech-software-development-company", text: "FinTech & Financial Services" },
            { href: "/industries/healthcare-software-development-services", text: "Healthcare & MedTech" },
            { href: "/ai/legal", text: "Legal & LegalTech" },
            { href: "/insurance", text: "Insurance & InsurTech" },

          ]},
          // FIX 3: Removed [Action] from all AI links in Industries
          { title: "AI Solutions", links: [
            { href: "/ai/fintech", text: "AI in FinTech" },
            { href: "/ai/healthcare", text: "AI in Healthcare" },
            { href: "/ai/legal", text: "AI in Legal" },

          ]}
        ]
      },
      {
        id: "industries-goods", label: "Goods & Logistics", icon: "truck", color: "text-orange-500",
        columns: 2,
        groups: [
          { title: "Goods & Logistics Industries", links: [
            { href: "/industries/manufacturing-software-development", text: "Manufacturing & Industrial IoT" },
            { href: "/industries/retail-ecommerce-software-development", text: "E-Commerce & Retail" },
            { href: "/industries/logistics-transportation-software-development", text: "Logistics & Transportation" },

          ]},
          // FIX 3: Removed [Action] from all AI links in Industries
          { title: "AI Solutions", links: [
            { href: "/ai/manufacturing", text: "AI in Manufacturing" },
            { href: "/ai/logistics", text: "AI in Logistics" },
            { href: "/ai/automotive", text: "AI in Automotive" }

          ]}
        ]
      },
      {
        id: "industries-services", label: "Services & Utilities", icon: "concierge-bell", color: "text-purple-500",
        columns: 2,
        groups: [
          { title: "Services & Utilities Industries", links: [
            { href: "/hr-software-solutions", text: "HR & Recruitment" },
            { href: "/industries/travel-tourism-software-development-services", text: "Hospitality & Travel" }

          ]},
          // FIX 3: Removed [Action] from all AI links in Industries
          { title: "AI Solutions", links: [
            { href: "/ai/recruitment-chatbot-solutions", text: "AI in HR & Recruitment" },
            { href: "/ai/hospitality", text: "AI in Hospitality" }
          ]}
        ]
      }
    ]
  },
  {
    id: "resources", label: "Resources", icon: "book-open",
    l2: [
      {
        id: "resources-knowledge", label: "Knowledge Hub", icon: "library", color: "text-indigo-500",
        columns: 1,
        groups: [{ title: "Knowledge Hub", links: [          
          { href: "/blog", text: "Blog & Insights" },          
          { href: "/case-studies", text: "Case Studies" },          
        ]}]
      },
      {
        id: "resources-benchmarks", label: "Benchmarks & Data", icon: "gauge", color: "text-orange-500",
        columns: 1,
        groups: [{ title: "Benchmarks & Data", links: [
          { href: "/ratecard", text: "Development Rate Cards" }          
        ]}]
      },      
      {
        id: "resources-tools", label: "Tools & Calculators", icon: "calculator", color: "text-red-500",
        columns: 1,
        groups: [{ title: "Tools & Calculators", links: [
          { href: "/cost-calculators/comparison", text: "Team Size Calculator" },
          { href: "/cost-calculators/roi", text: "ROI Calculator" },
          { href: "/cost-calculators/dedicated-teams", text: "Developer Rate Comparison" },
        ]}]
      },
      {
        id: "resources-trust", label: "Trust & Security", icon: "lock", color: "text-gray-500",
        columns: 1,
        groups: [{ title: "Trust & Security", links: [
          { href: "/in-media", text: "Certifications & Partnerships" },
          { href: "/testimonials", text: "Client Testimonials" }
        ]}]
      }
    ]
  },
  {
    id: "pricing", label: "Pricing", icon: "dollar-sign",
    l2: [
      {
        id: "pricing-calculators", label: "Calculators", icon: "calculator", color: "text-green-500",
        columns: 1,
        groups: [{ title: "Calculators", links: [
          { href: "/cost-calculators", text: "Project Cost Estimator" },
          { href: "/cost-calculators/comparison", text: "Team Size Calculator" }          
        ]}]
      },
      {
        id: "pricing-models", label: "Engagement Models", icon: "calculator", color: "text-blue-500",
        columns: 1,
        groups: [{ title: "Engagement Models", links: [
          { href: "/dedicated-development-teams", text: "Dedicated Teams" }
        ]}]
      },
      {
        id: "pricing-resources", label: "Resources", icon: "book-open", color: "text-indigo-500",
        columns: 1,
        groups: [{ title: "Resources", links: [
          { href: "/faq", text: "Pricing FAQ" }
        ]}]
      }
    ]
  },
  {
    id: "company", label: "Company", icon: "network",
    l2: [
      {
        id: "company-about", label: "About Us", icon: "info", color: "text-blue-500",
        columns: 1,
        groups: [{ title: "About Us", links: [
          { href: "/about", text: "About ValueCoders" },
          { href: "/how-it-works", text: "How We Work" },
          { href: "/why-agencies-choose-us", text: "Why ValueCoders" }

        ]}]
      },
      {
        id: "company-credentials", label: "Credentials & Trust", icon: "shield", color: "text-green-500",
        columns: 1,
        groups: [{ title: "Credentials & Trust", links: [
          { href: "/testimonials", text: "Client Testimonials" },
          { href: "/in-media", text: "Awards & Recognition" },
          { href: "/partnership-program", text: "Partnerships & Certifications" }
        ]}]
      },
      {
        id: "company-comparisons", label: "Comparisons", icon: "git-compare", color: "text-purple-500",
        columns: 2,
        groups: [
          { title: "Direct Competitor Comparisons", links: [            
            { href: "/blog/top-and-best-companies/upwork-vs-toptal-vs-valuecoders/", text: "ValueCoders vs Toptal" }
          ]},
          { title: "Location & Model Comparisons", links: [
            { href: "/blog/outsourcing-and-off-shoring/cost-comparison-offshore-vs-onshore-teams/", text: "Offshore vs Onshore Development" }
          ]}
        ]
      },      
      {
        id: "company-careers", label: "Careers & Culture", icon: "briefcase", color: "text-orange-500",
        columns: 1,
        groups: [{ title: "Careers & Culture", links: [
          { href: "/careers", text: "Browse Open Roles" },
          { href: "/contact", text: "Contact Us" }
        ]}]
      }
    ]
  }
];

/*
function extractIcons(obj, icons = []) {
  if (Array.isArray(obj)) {
    obj.forEach(item => extractIcons(item, icons));
  } else if (typeof obj === "object" && obj !== null) {
    for (let key in obj) {
      if (key === "icon") icons.push(obj[key]);
      extractIcons(obj[key], icons);
    }
  }
  return icons;
}

const icons = extractIcons(MENU_DATA);
console.log(icons);
*/
//console.log(MENU_DATA)
// ----------------------------------------------------------------------
// II. UTILITIES & STATE
// ----------------------------------------------------------------------

const DESKTOP_BREAKPOINT = 1024;

// Global State for Accessibility and Interaction tracking
const state = {
  isDesktop: window.innerWidth >= DESKTOP_BREAKPOINT,
  activeL1Button: null, 
  activeL1Menu: null,   
  activeL2Item: null,   
  hideTimeout: null,
  hideDelay: 150
};

// Helper for keyboard navigation to loop through focusable elements
const findNextFocusableElement = (root, current, direction = 1) => {
    // Collect all focusable elements visible in the root's scope
    const focusableElements = Array.from(root.querySelectorAll(
        'button:not([disabled]):not(.mobile-l1-toggle):not(.mobile-l2-toggle):not(.mobile-l3-toggle), a[href]:not([disabled])'
    )).filter(el => el.offsetWidth > 0 || el.offsetHeight > 0); 
    
    let currentIndex = -1;
    if (current) {
        currentIndex = focusableElements.findIndex(el => el === current);
    }
    
    let newIndex = currentIndex + direction;
    
    // Handle wrap-around logic
    if (newIndex >= focusableElements.length) {
        newIndex = 0;
    } else if (newIndex < 0) {
        newIndex = focusableElements.length - 1;
    }
    
    return focusableElements[newIndex];
};

const throttle = (callback, limit) => {
  let waiting = false;
  return function () {
    if (!waiting) {
      callback.apply(this, arguments);
      waiting = true;
      setTimeout(() => {
        waiting = false;
      }, limit);
    }
  }
};

// ----------------------------------------------------------------------
// III. HANDLERS
// ----------------------------------------------------------------------

class DesktopMenuHandler {
  constructor(system) {
    this.system = system;
    // References updated on render completion
    this.L1_TRIGGERS = [];
    this.MEGABOXES = [];
  }

  setupDesktopListeners() {
    // Collect DOM references after injection
    this.L1_TRIGGERS = Array.from(document.querySelectorAll('.nav-link[data-menu-target]'));
    this.MEGABOXES = Array.from(document.querySelectorAll('.mega-menu'));
    
    this.L1_TRIGGERS.forEach(button => {
      const menu = document.querySelector(button.dataset.menuTarget);
      if (!menu) return;

      // 1. Mouse Events
      button.addEventListener('mouseenter', this.handleL1Enter);
      button.addEventListener('mouseleave', this.handleL1Leave);
      menu.addEventListener('mouseenter', this.handleMenuEnter);
      menu.addEventListener('mouseleave', this.handleMenuLeave);

      // 2. Focus Events (A11y & Keyboard)
      button.addEventListener('focus', this.handleL1Focus);
      button.addEventListener('keydown', this.handleL1Keydown);
      menu.addEventListener('focusout', this.handleMenuFocusOut);
      menu.addEventListener('keydown', this.handleMenuKeydown);
    });

    // 3. L2/L3 Menu Delegation
    this.MEGABOXES.forEach(menu => {
      menu.addEventListener('click', this.handleMenuClick);
      menu.addEventListener('mouseenter', this.handleL2Activate, true); // Capture phase for L2 mouseenter
      menu.addEventListener('focusin', this.handleL2Activate, true);    // Capture phase for L2 focus
    });
  }
  
  destroyDesktopListeners() {
    this.L1_TRIGGERS.forEach(button => {
      const menu = document.querySelector(button.dataset.menuTarget);
      if (!menu) return;
      button.removeEventListener('mouseenter', this.handleL1Enter);
      button.removeEventListener('mouseleave', this.handleL1Leave);
      menu.removeEventListener('mouseenter', this.handleMenuEnter);
      menu.removeEventListener('mouseleave', this.handleMenuLeave);
      button.removeEventListener('focus', this.handleL1Focus);
      button.removeEventListener('keydown', this.handleL1Keydown);
      menu.removeEventListener('focusout', this.handleMenuFocusOut);
      menu.removeEventListener('keydown', this.handleMenuKeydown);
    });
    this.MEGABOXES.forEach(menu => {
      menu.removeEventListener('click', this.handleMenuClick);
      menu.removeEventListener('mouseenter', this.handleL2Activate, true);
      menu.removeEventListener('focusin', this.handleL2Activate, true);
    });
    clearTimeout(state.hideTimeout);
  }

  // --- Core Methods ---
  
  showL1(button, menu, focusFirst = true) {
    if (!state.isDesktop) return;

    // 1. Close any currently active menu
    if (state.activeL1Menu && state.activeL1Menu !== menu) {
      this.hideL1(state.activeL1Menu);
    }

    // 2. Update state and DOM for the new menu
    state.activeL1Button = button;
    state.activeL1Menu = menu;
    
    // Update L1 button styling/ARIA
    this.L1_TRIGGERS.forEach(l => l.classList.remove('is-expanded'));
    this.L1_TRIGGERS.forEach(l => l.setAttribute('aria-expanded', 'false'));
    
    button.classList.add('is-expanded');
    button.setAttribute('aria-expanded', 'true');
    
    // Show menu
    menu.classList.add('is-open');

    // 3. Activate the default L2 item and optionally focus it
    const firstL2Item = menu.querySelector('.l2-menu-item');
    if (firstL2Item) {
      this.activateL2(firstL2Item, true, focusFirst);
    }
  }

  hideL1(menu) {
    if (!menu || !menu.classList.contains('is-open')) return;
    
    menu.classList.remove('is-open');
    
    // Clear L1 button state
    const button = document.querySelector(`[data-menu-target="#${menu.id}"]`);
    if (button) {
      button.classList.remove('is-expanded');
      button.setAttribute('aria-expanded', 'false');
    }
    
    // Clear active state
    state.activeL1Button = null;
    state.activeL1Menu = null;
    state.activeL2Item = null;
    
    // Clear all animations/active classes
    menu.querySelectorAll('.l3-content-panel').forEach(panel => panel.classList.remove('is-active'));
    menu.querySelectorAll('.l2-item-active').forEach(item => item.classList.remove('l2-item-active'));
    menu.querySelectorAll('.tab-btn-base.is-active').forEach(btn => btn.classList.remove('is-active'));
    menu.querySelectorAll('.l2-menu-item-btn').forEach(btn => btn.setAttribute('aria-selected', 'false'));
    menu.querySelectorAll('.tab-btn-base').forEach(btn => btn.setAttribute('aria-selected', 'false'));
  }
  
  scheduleHideL1(menu) {
    clearTimeout(state.hideTimeout);
    state.hideTimeout = setTimeout(() => {
      this.hideL1(menu);
    }, state.hideDelay);
  }
  
  handleL2Activate = (e) => {
    if (!state.isDesktop) return;
    // Find the L2 item element, ensuring the event came from inside the L2 menu container
    const l2Item = e.target.closest('.l2-menu-item');
    if (l2Item && l2Item.closest('.l2-menu')) {
          // Only activate if the target is the button itself or the container being moused over
        const isButtonOrItem = e.target.closest('.l2-menu-item-btn') || e.type === 'mouseenter';
        if (isButtonOrItem) {
            this.activateL2(l2Item);
        }
    }
  }

  activateL2(l2Item, isInitial = false, focusNew = false) {
    const menu = l2Item.closest('.mega-menu');
    if (!menu) return;

    // 1. If already active and not the initial call, stop
    if (state.activeL2Item === l2Item && !isInitial) return;

    // 2. Deactivate previous L2/L3 state
    menu.querySelectorAll('.l2-item-active').forEach(i => i.classList.remove('l2-item-active'));
    menu.querySelectorAll('.l2-menu-item-btn').forEach(btn => btn.setAttribute('aria-selected', 'false'));
    menu.querySelectorAll('.l3-content-panel').forEach(panel => {
      panel.classList.add('hidden');
      panel.classList.remove('is-active'); 
    });
    
    // 3. Activate new L2
    state.activeL2Item = l2Item;
    l2Item.classList.add('l2-item-active');
    l2Item.querySelector('button').setAttribute('aria-selected', 'true');

    // 4. Show and animate L3 panel
    const targetId = l2Item.dataset.l3Target;
    const targetPanel = menu.querySelector(targetId);

    if (targetPanel) {
      targetPanel.classList.remove('hidden');
      targetPanel.classList.add('is-active'); // Triggers staggered CSS animation
      
      // 5. Activate the default/first L3 tab
      const firstTabBtn = targetPanel.querySelector('.tab-btn-base');
      if (firstTabBtn) {
          // We need to pass the targetPanel for context, as it contains the tab group.
          this.activateTab(firstTabBtn, targetPanel, true, focusNew); 
      }
    }
    
    // 6. Focus the newly activated item if requested (for keyboard)
    if (focusNew) {
        l2Item.querySelector('button').focus();
    }
  }

  activateTab(btn, parentPanel, isInitial = false, focusNew = false) {
    const tabGroup = parentPanel.dataset.tabGroup;
    const tabId = btn.dataset.tab;
    
    // 1. Deactivate all sibling buttons/links in the group
    parentPanel.querySelectorAll('.tab-btn-base').forEach(b => {
      b.classList.remove('is-active');
      b.setAttribute('aria-selected', 'false');
    });
    
    // 2. Activate current button/link
    btn.classList.add('is-active');
    btn.setAttribute('aria-selected', 'true');

    // 3. Hide all content containers in the group
    parentPanel.querySelectorAll('[data-tab-content]').forEach(content => content.classList.add('hidden'));
    
    // 4. Show target content
    const targetContent = parentPanel.querySelector(`[data-tab-content="${tabId}"]`);
    if (targetContent) {
      targetContent.classList.remove('hidden');
    }

    // 5. Focus the tab if requested (for keyboard)
    if (focusNew) {
        btn.focus();
    }
  }

  // --- Event Handlers (FIXED: replaced 'target' with 'e.currentTarget') ---

  handleL1Enter = (e) => {
    clearTimeout(state.hideTimeout);
    const button = e.currentTarget; // Use e.currentTarget
    if (state.isDesktop) { 
      this.showL1(button, document.querySelector(button.dataset.menuTarget), false);
    }
  }

  handleL1Leave = (e) => {
    const button = e.currentTarget; // Use e.currentTarget
    if (state.isDesktop) {
      this.scheduleHideL1(document.querySelector(button.dataset.menuTarget));
    }
  }

  handleMenuEnter = (e) => {
    if (state.isDesktop) {
      clearTimeout(state.hideTimeout);
    }
  }

  handleMenuLeave = (e) => {
    if (state.isDesktop) {
      this.scheduleHideL1(e.currentTarget);
    }
  }
  
  handleL1Focus = (e) => {
    clearTimeout(state.hideTimeout);
    const button = e.currentTarget; // Use e.currentTarget
    if (state.isDesktop) {
      this.showL1(button, document.querySelector(button.dataset.menuTarget), false);
    }
  }
  
  handleMenuFocusOut = (e) => {
    if (!state.isDesktop) return;
    const menu = e.currentTarget;
    const relatedTarget = e.relatedTarget;
    const trigger = document.querySelector(`[data-menu-target="#${menu.id}"]`);
    
    // If focus leaves the entire component area (menu + trigger), close it
    if (!menu.contains(relatedTarget) && (trigger && !trigger.contains(relatedTarget))) {
      this.scheduleHideL1(menu);
    } else {
      clearTimeout(state.hideTimeout);
    }
  }
  
  handleMenuClick = (e) => {
    // L2 activation is handled by mouse/focus event delegation (handleL2Activate)
    // L3 Tab activation (delegated)
    const tabBtn = e.target.closest('.tab-btn-base');
    if (tabBtn && state.isDesktop) {
      e.preventDefault();
      this.activateTab(tabBtn, tabBtn.closest('.l3-content-panel'));
      return;
    }
  }

  // --- Keyboard Navigation (Advanced A11y) ---

  handleL1Keydown = (e) => {
      // Note: When L1 loses focus, showL1 is called on the new focused button.
      if (!state.isDesktop) return;

      const currentButton = e.currentTarget;
      const currentMenu = document.querySelector(currentButton.dataset.menuTarget);
      if (!currentMenu) return;

      switch (e.key) {
          case 'ArrowRight':
              e.preventDefault();
              findNextFocusableElement(currentButton.parentElement.parentElement, currentButton, 1).focus();
              break;
          case 'ArrowLeft':
              e.preventDefault();
              findNextFocusableElement(currentButton.parentElement.parentElement, currentButton, -1).focus();
              break;
          case 'ArrowDown':
              e.preventDefault();
              // Ensure menu is open and then move focus to the first item in L2
              this.showL1(currentButton, currentMenu);
              const firstL2Btn = currentMenu.querySelector('.l2-menu-item-btn');
              if (firstL2Btn) {
                  firstL2Btn.focus();
              }
              break;
          case 'Escape':
              e.preventDefault();
              this.hideL1(currentMenu);
              currentButton.focus(); // Return focus to self
              break;
      }
  }

  handleMenuKeydown = (e) => {
    if (!state.isDesktop) return;
    
    const key = e.key;
    const currentElement = e.target;
    const currentMenu = e.currentTarget;

    // Exit on ESC
    if (key === 'Escape') {
        e.preventDefault();
        const trigger = state.activeL1Button;
        this.hideL1(currentMenu);
        if (trigger) trigger.focus();
        return;
    }

    // --- L2 Navigation (Vertical) ---
    if (currentElement.classList.contains('l2-menu-item-btn')) {
        const l2Item = currentElement.closest('.l2-menu-item');
        
        if (key === 'ArrowUp' || key === 'ArrowDown') {
            e.preventDefault();
            const direction = key === 'ArrowDown' ? 1 : -1;
            const nextL2Btn = findNextFocusableElement(l2Item.parentElement, currentElement, direction);
            if (nextL2Btn && nextL2Btn.classList.contains('l2-menu-item-btn')) {
                this.activateL2(nextL2Btn.closest('.l2-menu-item'), false, true);
            }
        } else if (key === 'ArrowRight') {
            e.preventDefault();
            // Move focus from L2 item to first L3 Tab/Link
            const targetPanelId = l2Item.dataset.l3Target;
            const targetPanel = document.querySelector(targetPanelId);
            const firstTabOrLink = targetPanel ? targetPanel.querySelector('.tab-btn-base, .link-hover-effect') : null;
            if (firstTabOrLink) {
                firstTabOrLink.focus();
            }
        } else if (key === 'ArrowLeft') {
            e.preventDefault();
            // Move focus back to the originating L1 button
            if (state.activeL1Button) {
                state.activeL1Button.focus();
                this.hideL1(currentMenu); // Optional: close menu when leaving L2 to L1
            }
        }
        return;
    }
    
    // --- L3 Tab Navigation (Horizontal) ---
    if (currentElement.classList.contains('tab-btn-base')) {
        const tabContainer = currentElement.parentElement;
        const parentPanel = currentElement.closest('.l3-content-panel');

        if (key === 'ArrowLeft' || key === 'ArrowRight') {
            e.preventDefault();
            const direction = key === 'ArrowRight' ? 1 : -1;
            const nextTab = findNextFocusableElement(tabContainer, currentElement, direction);
            
            if (nextTab && nextTab.classList.contains('tab-btn-base')) {
                this.activateTab(nextTab, parentPanel, false, true);
            }
        } else if (key === 'ArrowUp') {
            e.preventDefault();
            // Move focus from L3 tabs back to active L2 item
            if (state.activeL2Item) {
                state.activeL2Item.querySelector('.l2-menu-item-btn').focus();
            }
        } else if (key === 'ArrowDown') {
            e.preventDefault();
            // Move focus into the content area to the first L4 link
            const firstL4Link = parentPanel.querySelector('.link-hover-effect');
            if (firstL4Link) {
                firstL4Link.focus();
            }
        }
        return;
    }
    
    // --- L4 Link Navigation ---
    if (currentElement.classList.contains('link-hover-effect')) {
        const container = currentMenu; // Use the whole menu to find all links

        if (key === 'ArrowUp' || key === 'ArrowDown') {
            e.preventDefault();
            const direction = key === 'ArrowDown' ? 1 : -1;
            findNextFocusableElement(container, currentElement, direction).focus();
        } else if (key === 'ArrowLeft') {
            e.preventDefault();
            // Move focus back to L2 column (first focusable L2 item)
            const firstL2Btn = currentMenu.querySelector('.l2-menu-item-btn[aria-selected="true"]');
              if (firstL2Btn) {
                firstL2Btn.focus();
              }
        }
    }
  }
}


class MobileMenuHandler {
  constructor(system) {
    this.system = system;
    this.elements = {
      mobileMenu: document.getElementById('mobile-menu'),
      mobileOverlay: document.getElementById('mobile-overlay'),
      mobileNavContainer: document.getElementById('mobile-nav-container'),
      mobileMenuOpen: document.getElementById('mobile-menu-open'),
      mobileMenuClose: document.getElementById('mobile-menu-close'),
    };
  }
  
  setupMobileListeners() {
    this.elements.mobileMenuOpen.addEventListener('click', this.openMobile);
    this.elements.mobileMenuClose.addEventListener('click', this.closeMobile);
    this.elements.mobileOverlay.addEventListener('click', this.closeMobile);
    this.elements.mobileNavContainer.addEventListener('click', this.handleAccordionClick);
  }
  
  destroyMobileListeners() {
    this.elements.mobileMenuOpen.removeEventListener('click', this.openMobile);
    this.elements.mobileMenuClose.removeEventListener('click', this.closeMobile);
    this.elements.mobileOverlay.removeEventListener('click', this.closeMobile);
    this.elements.mobileNavContainer.removeEventListener('click', this.handleAccordionClick);
  }

  openMobile = () => {
    if (state.activeL1Button) {
      this.system.desktopHandler.hideL1(state.activeL1Menu); 
    }
    this.elements.mobileMenu.classList.add('is-open');
    this.elements.mobileOverlay.classList.add('is-open');
    this.elements.mobileMenuOpen.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  
  closeMobile = () => {
    this.elements.mobileMenu.classList.remove('is-open');
    this.elements.mobileOverlay.classList.remove('is-open');
    this.elements.mobileMenuOpen.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  // FIX 2: Refactored logic to correctly close siblings at L1, L2, and L3 levels
  handleAccordionClick = (e) => {
    const button = e.target.closest('.mobile-l1-toggle, .mobile-l2-toggle, .mobile-l3-toggle');
    if (!button) return;
    
    e.preventDefault();
    const panel = button.nextElementSibling;
    const icon = button.querySelector('.mobile-icon');
    
    const isL1 = button.classList.contains('mobile-l1-toggle');
    const isL2 = button.classList.contains('mobile-l2-toggle');
    const isL3 = button.classList.contains('mobile-l3-toggle');

    // Determine the container and selector for siblings at the same level
    let siblingsContainer;
    let currentLevelSelector;
    
    if (isL1) {
        siblingsContainer = button.closest('ul');
        currentLevelSelector = '.mobile-l1-toggle';
    } else if (isL2) {
        siblingsContainer = button.parentElement.closest('ul');
        currentLevelSelector = '.mobile-l2-toggle';
    } else if (isL3) {
        // L3 buttons/panels are direct children of the mobile-l3-panel DIV
        siblingsContainer = button.parentElement; 
        currentLevelSelector = '.mobile-l3-toggle';
    }

    if (panel.classList.contains('hidden')) {
      // Close siblings at the same level
      if(siblingsContainer) {
        siblingsContainer.querySelectorAll(currentLevelSelector).forEach(siblingBtn => {
          if (siblingBtn !== button) {
            const siblingPanel = siblingBtn.nextElementSibling;
            const siblingIcon = siblingBtn.querySelector('.mobile-icon');
            if (siblingPanel && !siblingPanel.classList.contains('hidden')) {
              siblingPanel.classList.add('hidden');
              siblingBtn.setAttribute('aria-expanded', 'false');
              if (siblingIcon) siblingIcon.classList.remove('is-open');
            }
          }
        });
      }
      
      // Open current panel
      panel.classList.remove('hidden');
      button.setAttribute('aria-expanded', 'true');
      if (icon) icon.classList.add('is-open');
    } else {
      // Close current panel
      panel.classList.add('hidden');
      button.setAttribute('aria-expanded', 'false');
      if (icon) icon.classList.remove('is-open');
    }
  }

  buildLinkHTML(link) {
    // Use a more inclusive check for action/tool links to determine styling
    const isAction = link.text.includes('[Action]') || link.text.includes('[Tool]');
    const text = link.text.replace(/\[Hub\]|\[Action\]|\[Tool\]/g, '').trim();
    const label = link.text;
    const styleClasses = isAction 
        ? 'text-blue-600 font-medium hover:text-blue-700' 
        : 'text-gray-700 font-normal hover:text-blue-600';

    return `<a href="${vcObj.web_url}${link.href}" class="block last-innner-menu" tabindex="-1" aria-label="${label}">${text}</a>`;
  }

  buildAccordionGroups(l2Item) {
    let html = [];
    // Combine groups from direct structure or nested tabs
    const allGroups = l2Item.tabs ? l2Item.tabs.flatMap(tab => tab.groups.map(g => ({ ...g, tabLabel: tab.label }))) : l2Item.groups;
    
    allGroups.forEach((group, index) => {
        if (group.links.length === 0) return;

        const l3Id = `mobile-l3-${l2Item.id}-${index}`;
        const l4PanelId = `mobile-l4-panel-${l2Item.id}-${index}`;
        
        // Format header: Prepend tab label if it came from a tab structure
        let header = group.title;
        if (l2Item.tabs && group.tabLabel) {
              // Check if the group title is just "Hidden Links" (for grid fillers)
            if(group.title !== "Hidden Links") {
                header = `${group.tabLabel}: ${group.title}`;
            } else {
                // Skip hidden links/placeholders
                return;
            }
        }

        // L3 buttons are direct children of the L3 panel DIV
        html.push(`
            <button type="button" class="mobile-l3-toggle menu-three-sub ${index > 0 ? '' : ''}"
                aria-expanded="false" aria-controls="${l4PanelId}" id="${l3Id}">
              <span class="second-sub-menu">${header}</span>
              <i data-lucide="chevron-down" class="menu-three-icon mobile-icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path style="fill:#232326" d="M12.5 18 2 7.707 2.707 7l9.793 9.586L22.293 7l.707.707L12.5 18z"></path></svg></i>
            </button>
            <div class="mobile-l4-panel hidden space-y-1" id="${l4PanelId}" role="region" aria-labelledby="${l3Id}">
        `);

        group.links.forEach(link => {
            html.push(this.buildLinkHTML(link));
        });

        html.push(`</div>`);
    });
    return html.join('');
  }

  buildMenu() {
    let mobileNavHTML = [];
    mobileNavHTML.push('<ul class="mobile-spacing" role="menu">');
    
    MENU_DATA.forEach((l1Item, l1Index) => {
      const l1Id = `mobile-l1-${l1Item.id}`;
      const l2PanelId = `mobile-l2-panel-${l1Item.id}`;

      mobileNavHTML.push(`
        <li role="presentation">
          <!-- FIX 1: Added a wrapper DIV and gap-3 to separate icon and text -->
          <button type="button" class="mobile-l1-toggle mobile-main-menu-list"
            aria-expanded="false" aria-controls="${l2PanelId}" id="${l1Id}" role="menuitem">
            <div class="m-m-text">
                <i data-lucide="${l1Item.icon}" class="m-icon-size"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layers" class="lucide lucide-layers w-5 h-5"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path></svg>  </i> 
                
                <span class="text-left">${l1Item.label}  </span>
            </div>
            <i data-lucide="chevron-down" class="m-icon-size mobile-icon ">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path style="fill:#232326" d="M12.5 18 2 7.707 2.707 7l9.793 9.586L22.293 7l.707.707L12.5 18z"/></svg></i>
          </button>
          <div class="mobile-l2-panel hidden " id="${l2PanelId}" role="group" aria-labelledby="${l1Id}">
            <ul class="second-menu-list-gap">
      `);

      l1Item.l2.forEach((l2Item, l2Index) => {
        const l2Id = `mobile-l2-${l2Item.id}`;
        const l3PanelId = `mobile-l3-panel-${l2Item.id}`;

        mobileNavHTML.push(`
          <li role="presentation">
            <button type="button" class="mobile-l2-toggle second-sub-menu-style"
              aria-expanded="false" aria-controls="${l3PanelId}" id="${l2Id}" role="menuitem">
              <span class="second-sub-menu">${l2Item.label}</span>
              <i data-lucide="chevron-down" class="sub-inner-icon-main mobile-icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path style="fill:#232326" d="M12.5 18 2 7.707 2.707 7l9.793 9.586L22.293 7l.707.707L12.5 18z"></path></svg></i>
            </button>
            <div class="mobile-l3-panel hidden second-last-menu" id="${l3PanelId}" role="group" aria-labelledby="${l2Id}">
                ${this.buildAccordionGroups(l2Item)}
            </div>
          </li>
        `);
      });

      mobileNavHTML.push(`</ul></div></li>`);
    });
    
    // Add fixed CTA link
    mobileNavHTML.push(`
      <div class="mobile-connectr-btn">
        <a href="${vcObj.web_url}/contact" class="btn-mobstyle">
          Get a Free Quote
        </a>
      </div>
    `);

    this.elements.mobileNavContainer.innerHTML = mobileNavHTML.join('');

    // Rerun lucide to generate icons inside the newly injected DOM
    if (typeof lucide !== 'undefined' && lucide.createIcons) {
      lucide.createIcons({ parent: this.elements.mobileNavContainer });
    }
  }
}


// ----------------------------------------------------------------------
// IV. DOM INJECTION (Rendering Desktop HTML from JSON)
// ----------------------------------------------------------------------

const renderMenuFromData = () => {
    let l1MenuHtml = [];
    let megaMenuHtml = [];
    
    MENU_DATA.forEach(l1 => {
        const menuId = `${l1.id}-menu`;
        const l1ButtonId = `l1-${l1.id}`;

        // --- L1 Button HTML ---
        l1MenuHtml.push(`
          <li role="none">            
            <a class="nav-link nav-item-base master-menu-text" 
              data-menu-target="#${menuId}" id="${l1ButtonId}" aria-expanded="false" aria-controls="${menuId}">
               ${l1.label}
            </a>
          </li>
        `);

        // --- Mega Menu Shell ---
        let l2MenuHtml = [];
        let l3ContentHtml = [];

        l1.l2.forEach((l2, l2Index) => {
            const l2ButtonId = `l2-${l2.id}`;
            const l3PanelId = `${l2.id}-content`;
            const isDefaultActive = l2Index === 0;
            let menuIcon = (l2.micon) ? l2.micon : l2.icon; 
            // L2 Sidebar Item
            l2MenuHtml.push(`
              <li class="l2-menu-item group" role="presentation" data-l3-target="#${l3PanelId}" data-l2-text="${l2.label}">
                <button type="button" class="my-sidemenu"
                  role="tab" aria-selected="${isDefaultActive ? 'true' : 'false'}" aria-controls="${l3PanelId}" id="${l2ButtonId}" tabindex="${isDefaultActive ? '0' : '-1'}">
                  <i data-lucide="${l2.icon}" class="m-icon-size  secon-icon-menu-part">
                  <img src="${baseTempUrl}${menuIcon}.svg" alt="${l2.label}" />
                  </i><span>${l2.label}</span>
                </button>
              </li>
            `);
            
            // L3 Content Panel
            let l3TabsHtml = [];
            let l3ContentBodyHtml = [];
            
            const displayType = l2.tabs ? 'tabs' : 'groups';

            if (displayType === 'tabs') {
                // TAB STRUCTURE
                l3TabsHtml.push('<nav class="sub-right-menu-text" role="tablist">');
                l2.tabs.forEach((tab, tabIndex) => {
                    const tabContentId = tab.id;
                    const isActive = tabIndex === 0;
                    
                    l3TabsHtml.push(`
                        <button type="button" class="tab-btn-base ${tab.id}-btn ${isActive ? 'is-active' : ''}" 
                          data-tab="${tab.id}" role="tab" aria-selected="${isActive ? 'true' : 'false'}" 
                          aria-controls="${l3PanelId}-${tab.id}" tabindex="${isActive ? '0' : '-1'}">
                          ${tab.label}
                        </button>
                    `);
                    let hasColumn = (tab.columns && tab.columns > 0) ? 'vcol-'+tab.columns : '';
                    l3ContentBodyHtml.push(`
                        <div data-tab-content="${tab.id}" class=" ${!isActive ? 'hidden' : ''} ${tab.id}-content" role="tabpanel" id="${l3PanelId}-${tab.id}" aria-labelledby="${tab.id}">
                          <div class="master-sub-menu-cards ${hasColumn}">
                    `);
                    tab.groups.forEach(group => {
                        if (group.title !== "Hidden Links") { // Skip placeholder groups
                            l3ContentBodyHtml.push(renderGroup(group));
                        }
                    });
                    l3ContentBodyHtml.push(`</div></div>`);
                });
                l3TabsHtml.push('</nav>');

                l3ContentHtml.push(`
                    <div id="${l3PanelId}" class="l3-content-panel  ${!isDefaultActive ? 'hidden' : ''}" role="tabpanel" aria-labelledby="${l2ButtonId}" data-tab-group="${l2.id}">
                      <h3 class="sr-only">${l2.label}</h3>
                      <div class="right-sub-menu-top">${l3TabsHtml.join('')}</div>
                      <div class="l3-tab-content-container ">${l3ContentBodyHtml.join('')}</div>
                    </div>
                `);

            } else {
                // SIMPLE GRID STRUCTURE
                let hasColumn = (l2.columns && l2.columns > 0) ? 'vcol-'+l2.columns : '';
                l3ContentHtml.push(`
                    <div id="${l3PanelId}" class="l3-content-panel  ${!isDefaultActive ? 'hidden' : ''}" role="region" aria-labelledby="${l2ButtonId}">
                      <h3 class="sr-only">${l2.label}</h3>
                      <div class="master-sub-menu-cards ${hasColumn}">
                `);
                l2.groups.forEach(group => {
                    if (group.title !== "Hidden Links") { // Skip placeholder groups
                        l3ContentHtml.push(renderGroup(group));
                    }
                });
                l3ContentHtml.push(`</div></div>`);
            }
        });

        // Assemble the final mega menu wrapper
        megaMenuHtml.push(`
            <div id="${menuId}" class="mega-menu shadow-card" role="region" aria-label="${l1.label} Mega Menu" aria-labelledby="${l1ButtonId}">
              <div class="desk-menu-box">
                <div class="menu-box-inner">
                  <!-- L2 Sidebar -->
                  <div class="l2-menu   custom-scrollbar inner-items-main" role="tablist" aria-orientation="vertical">
                    <ul class="sub-inner-list" role="group">
                      ${l2MenuHtml.join('')}
                    </ul>
                  </div>
                  <!-- L3 Content Area -->
                  <div class="l3-content-container sub-menu-right-part">
                      ${l3ContentHtml.join('')}
                  </div>
                </div>
              </div>
            </div>
        `);
    });

    document.getElementById('desktop-l1-menu').innerHTML = l1MenuHtml.join('');
    document.getElementById('mega-menu-desktop-container').innerHTML = megaMenuHtml.join('');
};

const renderGroup = (group) => {
    // Find links categorized by special tags
    let linksHtml = [];
    let actionHubHtml = [];
    let hubLink = null;

    group.links.forEach(link => {
        const isActionLink = link.text.includes('[Action]') || link.text.includes('[Tool]');
        const isHubLink = link.text.includes('[Hub]');
        
        // Clean up the text for display
        const linkText = link.text.replace(/\[Hub\]|\[Action\]|\[Tool\]/g, '').trim();

        if (isHubLink) {
            // Store the actual hub link for the header
            hubLink = link;
        } else if (isActionLink) {
            // Collect action links separately for the action hub footer
            actionHubHtml.push(`
                <a href="${vcObj.web_url}${link.href}" class="list-anctor-new">
                    ${linkText} <i data-lucide="arrow-up-right" class=""> <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-up-right" class="lucide lucide-arrow-up-right w-3.5 h-3.5 ml-0.5 canonical-arrow group-hover/header:text-blue-600"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></i>
                </a>
            `);
        } else {
            linksHtml.push(`<li><a href="${vcObj.web_url}${link.href}" class="link-hover-effect">${linkText}</a></li>`);
        }
    });
    
    let headerContent = '';
    if (hubLink) {
        // FIX 4: Refactored canonical link for proper arrow spacing and group hover behavior
        headerContent = `
            <a href="${vcObj.web_url}${hubLink.href}" class="canonical-header-link ">
              <span class="">${group.title}</span>
              <i data-lucide="arrow-up-right" class=""> <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-up-right" class="lucide lucide-arrow-up-right w-3.5 h-3.5 ml-0.5 canonical-arrow group-hover/header:text-blue-600"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></i>
            </a>
        `;
    } else {
      console.log(group);
        let hasLinkTitle = ( group.hasOwnProperty('href') ) ? '<a href="'+vcObj.web_url+group.href+'"><span>'+group.title+'</span></a>' : '<span>'+group.title+'</span>';
        // Standard Group Title
        headerContent = `
            <h4 class="card-semi-title">
                <span>${hasLinkTitle}</span>
            </h4>
        `;
    }


    return `
        <div class="menu-box-sub">
            <div>
                ${headerContent}
                <ul class=" second-menu-right-card">
                    ${linksHtml.join('')}
                </ul>
            </div>
            <!-- FIX 3: Removed the 'Related' header text. This block now only runs if there are actual [Action] or [Tool] links -->
            ${actionHubHtml.length > 0 ? `
                <div class="cross-link-box action-hub">
                    <h5 class=" tracking-wider">Related</h5>
                    ${actionHubHtml.join('')}
                </div>
            ` : ''}
        </div>
    `;
};


// ----------------------------------------------------------------------
// V. ORCHESTRATOR
// ----------------------------------------------------------------------
class MegaMenuSystem {
  constructor() {
    this.desktopHandler = new DesktopMenuHandler(this);
    this.mobileHandler = new MobileMenuHandler(this);
    this.previousIsDesktop = state.isDesktop;
    this.resizeHandler = throttle(this.handleResize, 100).bind(this);
  }
  
  init() {
    // 1. Initial DOM Render
    renderMenuFromData();

    // 2. Initial Handler Setup
    this.setupGlobalListeners();
    this.mobileHandler.setupMobileListeners();
    this.mobileHandler.buildMenu(); // Build mobile menu based on the new injected DOM

    if (state.isDesktop) {
      this.desktopHandler.setupDesktopListeners();
    }
  }

  destroy() {
    this.desktopHandler.destroyDesktopListeners();
    this.mobileHandler.destroyMobileListeners();
    window.removeEventListener('resize', this.resizeHandler);
    document.removeEventListener('keydown', this.handleGlobalKeyDown);
  }
  
  setupGlobalListeners() {
    window.addEventListener('resize', this.resizeHandler);
    document.addEventListener('keydown', this.handleGlobalKeyDown);
    
    // Ensure Lucide icons are rendered for static content
    if (typeof lucide !== 'undefined' && lucide.createIcons) {
      lucide.createIcons();
    }
  }

  handleGlobalKeyDown = (e) => {
    if (e.key === 'Escape') {
      if (this.mobileHandler.elements.mobileMenu.classList.contains('is-open')) {
        this.mobileHandler.closeMobile();
        this.mobileHandler.elements.mobileMenuOpen.focus(); 
      } else if (state.activeL1Menu) {
        const triggerToFocus = state.activeL1Button;
        this.desktopHandler.hideL1(state.activeL1Menu);
        if (triggerToFocus) triggerToFocus.focus(); 
      }
    }
  }
  
  handleResize() {
    const currentIsDesktop = window.innerWidth >= DESKTOP_BREAKPOINT;
    state.isDesktop = currentIsDesktop;

    if (currentIsDesktop !== this.previousIsDesktop) {
      if (currentIsDesktop) {
        // Mobile -> Desktop transition
        this.mobileHandler.closeMobile();
        this.desktopHandler.setupDesktopListeners();
      } else {
        // Desktop -> Mobile transition
        this.desktopHandler.hideL1(state.activeL1Menu);
        this.desktopHandler.destroyDesktopListeners();
        // Rebuild mobile menu only on breakpoint crossing 
      }
      this.previousIsDesktop = currentIsDesktop;
    }
  }
}

// Initialize the system after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  // Initialize the new, robust system
  window.megaMenuSystem = new MegaMenuSystem();
  window.megaMenuSystem.init();
});
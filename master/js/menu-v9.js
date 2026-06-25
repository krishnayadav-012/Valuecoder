(function(){
  "use strict";

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• COMMAND PALETTE INDEX (290 pages Â· WEB-001 v6.3) â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  const CMDK_INDEX = [
    {l:'AI & Automation',m:'Services hub',u:'/ai/',g:'Services',i:'ai'},
    {l:'AI Agent Development',m:'Services Â· AI & Automation',u:'/ai/ai-agent-development/',g:'Services',i:'ai'},
    {l:'Managed AI Services',m:'Services Â· AI & Automation â€” monitoring, observability, drift',u:'/ai/managed-ai-services/',g:'Services',i:'ai'},
    {l:'AI Consulting',m:'Services Â· AI & Automation â€” advisory entry',u:'/ai/ai-consulting/',g:'Services',i:'ai'},
    {l:'AI Transformation',m:'Services Â· AI & Automation â€” strategy & advisory',u:'/ai/ai-transformation/',g:'Services',i:'ai'},
    {l:'AI Integration Services',m:'Services Â· AI & Automation',u:'/ai/ai-integration-services/',g:'Services',i:'ai'},
    {l:'AI Augmented Software Development',m:'Services Â· AI & Automation',u:'/ai/ai-augmented-software-development/',g:'Services',i:'ai'},
    {l:'AI Built Software Audit',m:'Services Â· AI & Automation',u:'/ai/ai-built-software-audit/',g:'Services',i:'ai'},
    {l:'AI Governance',m:'Services Â· AI & Automation',u:'/ai/ai-governance/',g:'Services',i:'ai'},
    {l:'AI Model Testing',m:'Services Â· AI & Automation',u:'/ai/ai-model-testing/',g:'Services',i:'ai'},
    {l:'AI Process Automation',m:'Services Â· AI & Automation',u:'/ai/ai-process-automation/',g:'Services',i:'ai'},
    {l:'AI Product Development',m:'Services',u:'/services/ai-product-development/',g:'Services',i:'box'},
    {l:'AI Readiness',m:'Services Â· AI & Automation',u:'/ai/ai-readiness/',g:'Services',i:'ai'},
    {l:'AI Strategy',m:'Services Â· AI & Automation',u:'/ai/ai-strategy/',g:'Services',i:'ai'},
    {l:'AI for Ecommerce',m:'Services Â· AI by industry',u:'/ai/ecommerce/',g:'Services',i:'ai'},
    {l:'AI for Edtech',m:'Services Â· AI by industry',u:'/ai/edtech/',g:'Services',i:'ai'},
    {l:'AI for Fintech',m:'Services Â· AI by industry',u:'/ai/fintech/',g:'Services',i:'ai'},
    {l:'AI for Healthcare',m:'Services Â· AI by industry',u:'/ai/healthcare/',g:'Services',i:'ai'},
    {l:'AI for Logistics',m:'Services Â· AI by industry',u:'/ai/logistics/',g:'Services',i:'ai'},
    {l:'AI for Manufacturing',m:'Services Â· AI by industry',u:'/ai/manufacturing/',g:'Services',i:'ai'},
    {l:'AI for Media Entertainment',m:'Services Â· AI by industry',u:'/ai/media-entertainment/',g:'Services',i:'ai'},
    {l:'AI for SaaS',m:'Services Â· AI by industry',u:'/ai/saas/',g:'Services',i:'ai'},
    {l:'API Development',m:'Services',u:'/services/api-development/',g:'Services',i:'box'},
    {l:'API Security',m:'Services',u:'/services/api-security/',g:'Services',i:'mod'},
    {l:'API Testing',m:'Services',u:'/services/api-testing/',g:'Services',i:'mod'},
    {l:'AR VR Development',m:'Services',u:'/services/ar-vr-development/',g:'Services',i:'box'},
    {l:'AWS',m:'Services Â· Data & Cloud',u:'/cloud/aws/',g:'Services',i:'cloud'},
    {l:'Accessibility Testing',m:'Services',u:'/services/accessibility-testing/',g:'Services',i:'mod'},
    {l:'Agile Transformation',m:'Services',u:'/services/agile-transformation/',g:'Services',i:'mod'},
    {l:'All Services',m:'Services hub',u:'/services/',g:'Services',i:'box'},
    {l:'Analytics',m:'Services Â· Data & Cloud',u:'/data/analytics/',g:'Services',i:'data'},
    {l:'Application Modernization',m:'Services',u:'/services/application-modernization/',g:'Services',i:'mod'},
    {l:'Application Security',m:'Services',u:'/services/application-security/',g:'Services',i:'mod'},
    {l:'Automated Testing',m:'Services',u:'/services/automated-testing/',g:'Services',i:'mod'},
    {l:'Azure',m:'Services Â· Data & Cloud',u:'/cloud/azure/',g:'Services',i:'cloud'},
    {l:'Blockchain Development',m:'Services',u:'/services/blockchain-development/',g:'Services',i:'box'},
    {l:'Business Intelligence',m:'Services Â· Data & Cloud',u:'/data/business-intelligence/',g:'Services',i:'data'},
    {l:'CI/CD Integration',m:'Services',u:'/services/cicd-integration/',g:'Services',i:'box'},
    {l:'CTO As A Service',m:'Services',u:'/services/cto-as-a-service/',g:'Services',i:'mod'},
    {l:'Chatbot Development',m:'Services Â· AI & Automation',u:'/ai/chatbot-development/',g:'Services',i:'ai'},
    {l:'Cloud',m:'Services hub',u:'/cloud/',g:'Services',i:'cloud'},
    {l:'Cloud Security',m:'Services',u:'/services/cloud-security/',g:'Services',i:'mod'},
    {l:'Compliance Consulting',m:'Services',u:'/services/compliance-consulting/',g:'Services',i:'mod'},
    {l:'Computer Vision',m:'Services Â· AI & Automation',u:'/ai/computer-vision/',g:'Services',i:'ai'},
    {l:'Custom AI Applications',m:'Services Â· AI & Automation',u:'/ai/custom-ai-applications/',g:'Services',i:'ai'},
    {l:'Cybersecurity',m:'Services',u:'/services/cybersecurity/',g:'Services',i:'mod'},
    {l:'Data',m:'Services hub',u:'/data/',g:'Services',i:'data'},
    {l:'Data Modernization',m:'Services',u:'/services/data-modernization/',g:'Services',i:'mod'},
    {l:'DevOps',m:'Services Â· Data & Cloud',u:'/cloud/devops/',g:'Services',i:'cloud'},
    {l:'DevOps Transformation',m:'Services',u:'/services/devops-transformation/',g:'Services',i:'mod'},
    {l:'DevSecOps',m:'Services Â· Data & Cloud',u:'/cloud/devsecops/',g:'Services',i:'cloud'},
    {l:'Digital Transformation',m:'Services',u:'/services/digital-transformation/',g:'Services',i:'mod'},
    {l:'Digital Transformation Consulting',m:'Services Â· Modernise & Advisory',u:'/services/digital-transformation-consulting/',g:'Services',i:'mod'},
    {l:'Application Management Services',m:'Services Â· Modernise & Advisory',u:'/services/application-management-services/',g:'Services',i:'mod'},
    {l:'System Integration',m:'Services Â· Enterprise Platforms',u:'/services/system-integration/',g:'Services',i:'erp'},
    {l:'Edge Computing',m:'Services Â· IoT',u:'/iot/edge-computing/',g:'Services',i:'cloud'},
    {l:'Engineering',m:'Services Â· Data & Cloud',u:'/data/engineering/',g:'Services',i:'data'},
    {l:'Data Integration',m:'Services Â· Data & Cloud',u:'/data/integration/',g:'Services',i:'data'},
    {l:'Enterprise App Development',m:'Services',u:'/services/enterprise-app-development/',g:'Services',i:'erp'},
    {l:'Enterprise Platforms',m:'Services',u:'/services/enterprise-platforms/',g:'Services',i:'erp'},
    {l:'FinOps',m:'Services Â· Data & Cloud',u:'/cloud/finops/',g:'Services',i:'cloud'},
    {l:'Fintech',m:'Services Â· Data & Cloud',u:'/data/fintech/',g:'Services',i:'data'},
    {l:'GenAI Development',m:'Services Â· AI & Automation',u:'/ai/genai-development/',g:'Services',i:'ai'},
    {l:'Google Cloud',m:'Services Â· Data & Cloud',u:'/cloud/google-cloud/',g:'Services',i:'cloud'},
    {l:'Governance',m:'Services Â· Data & Cloud',u:'/data/governance/',g:'Services',i:'data'},
    {l:'IT Compliance Audit',m:'Services',u:'/services/it-compliance-audit/',g:'Services',i:'mod'},
    {l:'IT Strategy Consulting',m:'Services',u:'/services/it-strategy-consulting/',g:'Services',i:'mod'},
    {l:'Infrastructure',m:'Services Â· Data & Cloud',u:'/cloud/infrastructure/',g:'Services',i:'cloud'},
    {l:'IoT Development',m:'Services hub',u:'/iot/',g:'Services',i:'cloud'},
    {l:'IoT Security',m:'Services Â· IoT',u:'/iot/iot-security/',g:'Services',i:'cloud'},
    {l:'Kubernetes',m:'Services Â· Data & Cloud',u:'/cloud/kubernetes/',g:'Services',i:'cloud'},
    {l:'LLM Applications',m:'Services Â· AI & Automation',u:'/ai/llm-applications/',g:'Services',i:'ai'},
    {l:'LLM Fine Tuning',m:'Services Â· AI & Automation',u:'/ai/llm-fine-tuning/',g:'Services',i:'ai'},
    {l:'Legacy Modernization',m:'Services',u:'/services/legacy-modernization/',g:'Services',i:'mod'},
    {l:'Lifecycle Governance',m:'Services',u:'/services/lifecycle-governance/',g:'Services',i:'box'},
    {l:'MCP Integration Services',m:'Services Â· AI & Automation',u:'/ai/mcp-integration-services/',g:'Services',i:'ai'},
    {l:'MLOps Services',m:'Services Â· AI & Automation',u:'/ai/mlops-services/',g:'Services',i:'ai'},
    {l:'MVP Development',m:'Services',u:'/services/mvp-development/',g:'Services',i:'box'},
    {l:'Machine Learning Development',m:'Services Â· AI & Automation',u:'/ai/machine-learning-development/',g:'Services',i:'ai'},
    {l:'Manual Testing',m:'Services',u:'/services/manual-testing/',g:'Services',i:'mod'},
    {l:'Microservices',m:'Services',u:'/services/microservices/',g:'Services',i:'box'},
    {l:'Microsoft',m:'Services',u:'/services/microsoft/',g:'Services',i:'erp'},
    {l:'Microsoft Dynamics',m:'Services',u:'/services/microsoft/dynamics/',g:'Services',i:'erp'},
    {l:'Microsoft Power BI',m:'Services',u:'/services/microsoft/power-bi/',g:'Services',i:'erp'},
    {l:'Microsoft Power Platform',m:'Services',u:'/services/microsoft/power-platform/',g:'Services',i:'erp'},
    {l:'Microsoft SharePoint',m:'Services',u:'/services/microsoft/sharepoint/',g:'Services',i:'erp'},
    {l:'Migration',m:'Services Â· Data & Cloud',u:'/cloud/migration/',g:'Services',i:'cloud'},
    {l:'Migration',m:'Services Â· Data & Cloud',u:'/data/migration/',g:'Services',i:'data'},
    {l:'Mobile App Development',m:'Services',u:'/services/mobile-app-development/',g:'Services',i:'box'},
    {l:'Mobile Testing',m:'Services',u:'/services/mobile-testing/',g:'Services',i:'mod'},
    {l:'NLP Development',m:'Services Â· AI & Automation',u:'/ai/nlp-development/',g:'Services',i:'ai'},
    {l:'Operations',m:'Services Â· Data & Cloud',u:'/cloud/operations/',g:'Services',i:'cloud'},
    {l:'Oracle',m:'Services',u:'/services/oracle/',g:'Services',i:'erp'},
    {l:'Penetration Testing',m:'Services',u:'/services/penetration-testing/',g:'Services',i:'mod'},
    {l:'Performance Testing',m:'Services',u:'/services/performance-testing/',g:'Services',i:'mod'},
    {l:'Platform Development',m:'Services Â· IoT',u:'/iot/platform-development/',g:'Services',i:'cloud'},
    {l:'Process Automation',m:'Services',u:'/services/process-automation/',g:'Services',i:'box'},
    {l:'Product Discovery',m:'Services',u:'/services/product-discovery/',g:'Services',i:'box'},
    {l:'Product Engineering',m:'Services',u:'/services/product-engineering/',g:'Services',i:'box'},
    {l:'Product Feasibility',m:'Services',u:'/services/product-feasibility/',g:'Services',i:'mod'},
    {l:'Production Assurance',m:'Services Â· AI & Automation',u:'/ai/production-assurance/',g:'Services',i:'ai'},
    {l:'Prompt Engineering',m:'Services Â· AI & Automation',u:'/ai/prompt-engineering/',g:'Services',i:'ai'},
    {l:'QA Consulting',m:'Services',u:'/services/qa-consulting/',g:'Services',i:'mod'},
    {l:'Quality Engineering',m:'Services',u:'/services/quality-engineering/',g:'Services',i:'mod'},
    {l:'RAG Implementation',m:'Services Â· AI & Automation',u:'/ai/rag-implementation/',g:'Services',i:'ai'},
    {l:'RPA Automation',m:'Services Â· AI & Automation',u:'/ai/rpa-automation/',g:'Services',i:'ai'},
    {l:'Regression Testing',m:'Services',u:'/services/regression-testing/',g:'Services',i:'mod'},
    {l:'SAP',m:'Services',u:'/services/sap/',g:'Services',i:'erp'},
    {l:'SAP Implementation',m:'Services',u:'/services/sap/implementation/',g:'Services',i:'erp'},
    {l:'SAP Integration',m:'Services',u:'/services/sap/integration/',g:'Services',i:'erp'},
    {l:'SaaS Development',m:'Services',u:'/services/saas-development/',g:'Services',i:'box'},
    {l:'Salesforce',m:'Services',u:'/services/salesforce/',g:'Services',i:'erp'},
    {l:'Salesforce Consulting',m:'Services',u:'/services/salesforce/consulting/',g:'Services',i:'erp'},
    {l:'Salesforce Implementation',m:'Services',u:'/services/salesforce/implementation/',g:'Services',i:'erp'},
    {l:'Security Audits',m:'Services',u:'/services/security-audits/',g:'Services',i:'mod'},
    {l:'Security Governance',m:'Services',u:'/services/security-governance/',g:'Services',i:'mod'},
    {l:'Security Testing',m:'Services',u:'/services/security-testing/',g:'Services',i:'mod'},
    {l:'ServiceNow',m:'Services',u:'/services/servicenow/',g:'Services',i:'erp'},
    {l:'ServiceNow Consulting',m:'Services',u:'/services/servicenow/consulting/',g:'Services',i:'erp'},
    {l:'ServiceNow Implementation',m:'Services',u:'/services/servicenow/implementation/',g:'Services',i:'erp'},
    {l:'Software Architecture',m:'Services',u:'/services/software-architecture/',g:'Services',i:'mod'},
    {l:'Software Development',m:'Services',u:'/services/software-development/',g:'Services',i:'box'},
    {l:'Solution Architecture',m:'Services',u:'/services/solution-architecture/',g:'Services',i:'mod'},
    {l:'Technical Program Management',m:'Services',u:'/services/technical-program-management/',g:'Services',i:'mod'},
    {l:'Technology Consulting',m:'Services',u:'/services/technology-consulting/',g:'Services',i:'mod'},
    {l:'Technology Strategy',m:'Services',u:'/services/technology-strategy/',g:'Services',i:'mod'},
    {l:'UAT Testing',m:'Services',u:'/services/uat-testing/',g:'Services',i:'mod'},
    {l:'UI UX Design',m:'Services',u:'/services/ui-ux-design/',g:'Services',i:'box'},
    {l:'Warehouse',m:'Services Â· Data & Cloud',u:'/data/warehouse/',g:'Services',i:'data'},
    {l:'Web App Development',m:'Services',u:'/services/web-app-development/',g:'Services',i:'box'},
    {l:'Workflow Automation Tools',m:'Services Â· AI & Automation',u:'/ai/workflow-automation-tools/',g:'Services',i:'ai'},
    {l:'AI Built Rescue',m:'Solution',u:'/solutions/ai-built-rescue/',g:'Solutions',i:'sol'},
    {l:'All Solutions',m:'Solutions hub',u:'/solutions/',g:'Solutions',i:'sol'},
    {l:'Build Your MVP',m:'Solution',u:'/solutions/build-your-mvp/',g:'Solutions',i:'sol'},
    {l:'Build Your Product',m:'Solution',u:'/solutions/build-your-product/',g:'Solutions',i:'sol'},
    {l:'Modernise Legacy Systems',m:'Solution',u:'/solutions/modernise-legacy-systems/',g:'Solutions',i:'sol'},
    {l:'Project Scoping',m:'Solutions Â· Universal first step',u:'/solutions/project-scoping/',g:'Solutions',i:'scope'},
    {l:'Scale Your India Centre',m:'Solution',u:'/solutions/scale-your-india-centre/',g:'Solutions',i:'sol'},
    {l:'Ship Your Roadmap',m:'Solution',u:'/solutions/ship-your-roadmap/',g:'Solutions',i:'sol'},
    {l:'All Industries',m:'Industries hub',u:'/industries/',g:'Industries',i:'ind'},
    {l:'Automotive',m:'Industry',u:'/industries/automotive/',g:'Industries',i:'ind'},
    {l:'Banking Financial Services',m:'Industry',u:'/industries/banking-financial-services/',g:'Industries',i:'ind'},
    {l:'Ecommerce',m:'Industry',u:'/industries/ecommerce/',g:'Industries',i:'ind'},
    {l:'Ecommerce â€” AI',m:'Industry Â· AI',u:'/industries/ecommerce/ai/',g:'Industries',i:'ind'},
    {l:'Edtech',m:'Industry',u:'/industries/edtech/',g:'Industries',i:'ind'},
    {l:'Edtech â€” AI',m:'Industry Â· AI',u:'/industries/edtech/ai/',g:'Industries',i:'ind'},
    {l:'Fintech',m:'Industry',u:'/industries/fintech/',g:'Industries',i:'ind'},
    {l:'Fintech â€” AI',m:'Industry Â· AI',u:'/industries/fintech/ai/',g:'Industries',i:'ind'},
    {l:'Fintech â€” Core Banking Integration',m:'Industry',u:'/industries/fintech/core-banking-integration/',g:'Industries',i:'ind'},
    {l:'Fintech â€” Data',m:'Industry Â· Data',u:'/industries/fintech/data/',g:'Industries',i:'ind'},
    {l:'HR',m:'Industry',u:'/industries/hr/',g:'Industries',i:'ind'},
    {l:'Healthcare',m:'Industry',u:'/industries/healthcare/',g:'Industries',i:'ind'},
    {l:'Healthcare â€” AI',m:'Industry Â· AI',u:'/industries/healthcare/ai/',g:'Industries',i:'ind'},
    {l:'Healthcare â€” Data',m:'Industry Â· Data',u:'/industries/healthcare/data/',g:'Industries',i:'ind'},
    {l:'Healthcare â€” EHR Integration',m:'Industry',u:'/industries/healthcare/ehr-integration/',g:'Industries',i:'ind'},
    {l:'Healthcare â€” Healthcare CRM',m:'Industry',u:'/industries/healthcare/healthcare-crm/',g:'Industries',i:'ind'},
    {l:'Healthcare â€” Remote Patient Monitoring',m:'Industry',u:'/industries/healthcare/remote-patient-monitoring/',g:'Industries',i:'ind'},
    {l:'Insurance',m:'Industry',u:'/industries/insurance/',g:'Industries',i:'ind'},
    {l:'Insurtech',m:'Industry',u:'/industries/insurtech/',g:'Industries',i:'ind'},
    {l:'Logistics',m:'Industry',u:'/industries/logistics/',g:'Industries',i:'ind'},
    {l:'Logistics â€” AI',m:'Industry Â· AI',u:'/industries/logistics/ai/',g:'Industries',i:'ind'},
    {l:'Logistics â€” Freight Forwarding',m:'Industry',u:'/industries/logistics/freight-forwarding/',g:'Industries',i:'ind'},
    {l:'Logistics â€” TMS',m:'Industry',u:'/industries/logistics/tms/',g:'Industries',i:'ind'},
    {l:'Logistics â€” TMS WMS Integration',m:'Industry',u:'/industries/logistics/tms-wms-integration/',g:'Industries',i:'ind'},
    {l:'Logistics â€” Yard Management',m:'Industry',u:'/industries/logistics/yard-management/',g:'Industries',i:'ind'},
    {l:'Manufacturing',m:'Industry',u:'/industries/manufacturing/',g:'Industries',i:'ind'},
    {l:'Manufacturing â€” AI',m:'Industry Â· AI',u:'/industries/manufacturing/ai/',g:'Industries',i:'ind'},
    {l:'Media Entertainment',m:'Industry',u:'/industries/media-entertainment/',g:'Industries',i:'ind'},
    {l:'Media Entertainment â€” AI',m:'Industry Â· AI',u:'/industries/media-entertainment/ai/',g:'Industries',i:'ind'},
    {l:'Oil Gas',m:'Industry',u:'/industries/oil-gas/',g:'Industries',i:'ind'},
    {l:'Real Estate',m:'Industry',u:'/industries/real-estate/',g:'Industries',i:'ind'},
    {l:'SaaS',m:'Industry',u:'/industries/saas/',g:'Industries',i:'ind'},
    {l:'SaaS â€” AI',m:'Industry Â· AI',u:'/industries/saas/ai/',g:'Industries',i:'ind'},
    {l:'Telecommunications',m:'Industry',u:'/industries/telecommunications/',g:'Industries',i:'ind'},
    {l:'Browse all 60+ roles',m:'Hire hub',u:'/hire/',g:'Hire',i:'hire'},
    {l:'Delivery Pods',m:'Hire Â· Engagement Model',u:'/dedicated-teams/delivery-pods/',g:'Hire',i:'team'},
    {l:'Development Centers',m:'Hire Â· Engagement Model',u:'/dedicated-teams/development-centers/',g:'Hire',i:'team'},
    {l:'Engagement Models',m:'Dedicated Teams hub',u:'/dedicated-teams/',g:'Hire',i:'team'},
    {l:'AI Engineering Pods',m:'Hire Â· Engagement Models',u:'/dedicated-teams/ai-engineering-pods/',g:'Hire',i:'team'},
    {l:'Hire .NET Developers',m:'Hire',u:'/hire/dotnet-developers/',g:'Hire',i:'hire'},
    {l:'Hire AI Agent Developers',m:'Hire',u:'/hire/ai-agent-developers/',g:'Hire',i:'hire'},
    {l:'Hire AI Developers',m:'Hire',u:'/hire/ai-developers/',g:'Hire',i:'hire'},
    {l:'Hire AI Engineers',m:'Hire',u:'/hire/ai-engineers/',g:'Hire',i:'hire'},
    {l:'Hire AR VR Developers',m:'Hire',u:'/hire/ar-vr-developers/',g:'Hire',i:'hire'},
    {l:'Hire AWS Developers',m:'Hire',u:'/hire/aws-developers/',g:'Hire',i:'hire'},
    {l:'Hire Android Developers',m:'Hire',u:'/hire/android-developers/',g:'Hire',i:'hire'},
    {l:'Hire Angular Developers',m:'Hire',u:'/hire/angular-developers/',g:'Hire',i:'hire'},
    {l:'Hire Automation Engineers',m:'Hire',u:'/hire/automation-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Azure Developers',m:'Hire',u:'/hire/azure-developers/',g:'Hire',i:'hire'},
    {l:'Hire Backend Developers',m:'Hire',u:'/hire/backend-developers/',g:'Hire',i:'hire'},
    {l:'Hire Blockchain Developers',m:'Hire',u:'/hire/blockchain-developers/',g:'Hire',i:'hire'},
    {l:'Hire Cloud DevOps Engineers',m:'Hire',u:'/hire/cloud-devops-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Cloud Engineers',m:'Hire',u:'/hire/cloud-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Cloud Security Engineers',m:'Hire',u:'/hire/cloud-security-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Data Engineers',m:'Hire',u:'/hire/data-engineers/',g:'Hire',i:'hire'},
    {l:'Hire DevOps Engineers',m:'Hire',u:'/hire/devops-engineers/',g:'Hire',i:'hire'},
    {l:'Hire DevSecOps Engineers',m:'Hire',u:'/hire/devsecops-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Dynamics 365 Developers',m:'Hire',u:'/hire/dynamics-365-developers/',g:'Hire',i:'hire'},
    {l:'Hire FinOps Engineers',m:'Hire',u:'/hire/finops-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Flutter Developers',m:'Hire',u:'/hire/flutter-developers/',g:'Hire',i:'hire'},
    {l:'Hire Frontend Developers',m:'Hire',u:'/hire/frontend-developers/',g:'Hire',i:'hire'},
    {l:'Hire Full Stack Developers',m:'Hire',u:'/hire/full-stack-developers/',g:'Hire',i:'hire'},
    {l:'Hire Go Developers',m:'Hire',u:'/hire/golang-developers/',g:'Hire',i:'hire'},
    {l:'Hire IoT Developers',m:'Hire',u:'/hire/iot-developers/',g:'Hire',i:'hire'},
    {l:'Hire Java Developers',m:'Hire',u:'/hire/java-developers/',g:'Hire',i:'hire'},
    {l:'Hire JavaScript Developers',m:'Hire',u:'/hire/javascript-developers/',g:'Hire',i:'hire'},
    {l:'Hire Kotlin Developers',m:'Hire',u:'/hire/kotlin-developers/',g:'Hire',i:'hire'},
    {l:'Hire Kubernetes Engineers',m:'Hire',u:'/hire/kubernetes-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Manual QA Testers',m:'Hire',u:'/hire/manual-qa-testers/',g:'Hire',i:'hire'},
    {l:'Hire Ml Engineers',m:'Hire',u:'/hire/ml-engineers/',g:'Hire',i:'hire'},
    {l:'Hire Mobile App Developers',m:'Hire',u:'/hire/mobile-app-developers/',g:'Hire',i:'hire'},
    {l:'Hire Next.js Developers',m:'Hire',u:'/hire/nextjs-developers/',g:'Hire',i:'hire'},
    {l:'Hire Node.js Developers',m:'Hire',u:'/hire/nodejs-developers/',g:'Hire',i:'hire'},
    {l:'Hire PHP Developers',m:'Hire',u:'/hire/php-developers/',g:'Hire',i:'hire'},
    {l:'Hire Performance Testers',m:'Hire',u:'/hire/performance-testers/',g:'Hire',i:'hire'},
    {l:'Hire Power BI Developers',m:'Hire',u:'/hire/power-bi-developers/',g:'Hire',i:'hire'},
    {l:'Hire Power Platform Professionals',m:'Hire',u:'/hire/power-platform-professionals/',g:'Hire',i:'hire'},
    {l:'Hire Product Designers',m:'Hire',u:'/hire/product-designers/',g:'Hire',i:'hire'},
    {l:'Hire Python Developers',m:'Hire',u:'/hire/python-developers/',g:'Hire',i:'hire'},
    {l:'Hire QA Engineers',m:'Hire',u:'/hire/qa-engineers/',g:'Hire',i:'hire'},
    {l:'Hire QA Testing Team',m:'Hire',u:'/hire/qa-testing-team/',g:'Hire',i:'hire'},
    {l:'Hire RPA Developers',m:'Hire',u:'/hire/rpa-developers/',g:'Hire',i:'hire'},
    {l:'Hire React Developers',m:'Hire',u:'/hire/react-developers/',g:'Hire',i:'hire'},
    {l:'Hire C/C++ Developers',m:'Hire â€” systems, embedded, performance',u:'/hire/cpp-developers/',g:'Hire',i:'hire'},
    {l:'Hire React Native Developers',m:'Hire',u:'/hire/react-native-developers/',g:'Hire',i:'hire'},
    {l:'Hire Ruby Developers',m:'Hire',u:'/hire/ruby-developers/',g:'Hire',i:'hire'},
    {l:'Hire Rust Developers',m:'Hire',u:'/hire/rust-developers/',g:'Hire',i:'hire'},
    {l:'Hire SAP Developers',m:'Hire',u:'/hire/sap-developers/',g:'Hire',i:'hire'},
    {l:'Hire Salesforce Developers',m:'Hire',u:'/hire/salesforce-developers/',g:'Hire',i:'hire'},
    {l:'Hire Security Testers',m:'Hire',u:'/hire/security-testers/',g:'Hire',i:'hire'},
    {l:'Hire ServiceNow Developers',m:'Hire',u:'/hire/servicenow-developers/',g:'Hire',i:'hire'},
    {l:'Hire SharePoint Developers',m:'Hire',u:'/hire/sharepoint-developers/',g:'Hire',i:'hire'},
    {l:'Hire Software Developers',m:'Hire',u:'/hire/software-developers/',g:'Hire',i:'hire'},
    {l:'Hire Solution Architects',m:'Hire',u:'/hire/solution-architects/',g:'Hire',i:'hire'},
    {l:'Hire Swift Developers',m:'Hire',u:'/hire/swift-developers/',g:'Hire',i:'hire'},
    {l:'Hire Technical Architects',m:'Hire',u:'/hire/technical-architects/',g:'Hire',i:'hire'},
    {l:'Hire TypeScript Developers',m:'Hire',u:'/hire/typescript-developers/',g:'Hire',i:'hire'},
    {l:'Hire UI UX Designers',m:'Hire',u:'/hire/ui-ux-designers/',g:'Hire',i:'hire'},
    {l:'Hire Vue.js Developers',m:'Hire',u:'/hire/vuejs-developers/',g:'Hire',i:'hire'},
    {l:'Hire Web Developers',m:'Hire',u:'/hire/web-developers/',g:'Hire',i:'hire'},
    {l:'Hire iOS Developers',m:'Hire',u:'/hire/ios-developers/',g:'Hire',i:'hire'},
    {l:'Staff Augmentation',m:'Hire Â· Engagement Model',u:'/dedicated-teams/staff-augmentation/',g:'Hire',i:'team'},
    {l:'Team Extension',m:'Hire Â· Engagement Model',u:'/dedicated-teams/team-extension/',g:'Hire',i:'team'},
    {l:'AI Built Readiness',m:'Company',u:'/resources/assessments/ai-built-readiness/',g:'Company',i:'co'},
    {l:'AI Data',m:'Company',u:'/blog/ai-data/',g:'Company',i:'co'},
    {l:'AI Development Cost',m:'Guide',u:'/resources/guides/ai-development-cost/',g:'Company',i:'co'},
    {l:'What Is LLMOps?',m:'Guide',u:'/resources/guides/what-is-llmops/',g:'Company',i:'co'},
    {l:'LLM Observability Tools Compared',m:'Guide',u:'/resources/guides/llm-observability-tools/',g:'Company',i:'co'},
    {l:'What Are Application Managed Services?',m:'Guide',u:'/resources/guides/what-are-application-managed-services/',g:'Company',i:'co'},
    {l:'AIOps vs MLOps vs LLMOps',m:'Guide',u:'/resources/guides/aiops-vs-mlops-vs-llmops/',g:'Company',i:'co'},
    {l:'What Is AgentOps?',m:'Guide',u:'/resources/guides/what-is-agentops/',g:'Company',i:'co'},
    {l:'AWS Partnership',m:'Company',u:'/company/partnerships/aws/',g:'Company',i:'co'},
    {l:'About',m:'Company',u:'/company/about/',g:'Company',i:'co'},
    {l:'About ValueCoders',m:'Company hub',u:'/company/',g:'Company',i:'co'},
    {l:'Assessments',m:'Company',u:'/resources/assessments/',g:'Company',i:'co'},
    {l:'Benchmarks',m:'Company',u:'/company/benchmarks/',g:'Company',i:'co'},
    {l:'Blog',m:'Company Â· Insights',u:'/blog/',g:'Company',i:'co'},
    {l:'Calculator',m:'Company',u:'/pricing/calculator/',g:'Company',i:'co'},
    {l:'Careers',m:'Company',u:'/company/careers/',g:'Company',i:'co'},
    {l:'Case Studies',m:'Company Â· Proof',u:'/case-studies/',g:'Company',i:'co'},
    {l:'Clients',m:'Company',u:'/company/clients/',g:'Company',i:'co'},
    {l:'Cloud Migration Guide 2024',m:'Company',u:'/blog/cloud/cloud-migration-guide-2024/',g:'Company',i:'co'},
    {l:'Cloud Migration Strategy',m:'Guide',u:'/resources/guides/cloud-migration-strategy/',g:'Company',i:'co'},
    {l:'Contact',m:'Company',u:'/company/contact/',g:'Company',i:'co'},
    {l:'Contact Us',m:'Company',u:'/contact/',g:'Company',i:'co'},
    {l:'Credentials',m:'Company',u:'/company/credentials/',g:'Company',i:'co'},
    {l:'Decks',m:'Company',u:'/resources/decks/',g:'Company',i:'co'},
    {l:'DevOps Best Practices',m:'Guide',u:'/resources/guides/devops-best-practices/',g:'Company',i:'co'},
    {l:'Fintech Lender API Platform 8 Weeks',m:'Case Study',u:'/case-studies/fintech-lender-api-platform-8-weeks/',g:'Company',i:'co'},
    {l:'Google Partnership',m:'Company',u:'/company/partnerships/google/',g:'Company',i:'co'},
    {l:'Guides',m:'Company',u:'/resources/guides/',g:'Company',i:'co'},
    {l:'Guides & Resources',m:'Company Â· Insights',u:'/resources/',g:'Company',i:'co'},
    {l:'Hire .NET Developers Cost',m:'Guide',u:'/resources/guides/hire-dotnet-developers-cost/',g:'Company',i:'co'},
    {l:'Hire Java Developers Cost',m:'Guide',u:'/resources/guides/hire-java-developers-cost/',g:'Company',i:'co'},
    {l:'Hire Node.js Developers Cost',m:'Guide',u:'/resources/guides/hire-nodejs-developers-cost/',g:'Company',i:'co'},
    {l:'Hire Python Developers Cost',m:'Guide',u:'/resources/guides/hire-python-developers-cost/',g:'Company',i:'co'},
    {l:'Hire React Developers Cost',m:'Guide',u:'/resources/guides/hire-react-developers-cost/',g:'Company',i:'co'},
    {l:'How We Work',m:'Company',u:'/company/how-we-work/',g:'Company',i:'co'},
    {l:'Leadership',m:'Company',u:'/company/leadership/',g:'Company',i:'co'},
    {l:'Lendio 14 API Integrations 12 Weeks',m:'Case Study',u:'/case-studies/lendio-14-api-integrations-12-weeks/',g:'Company',i:'co'},
    {l:'Microsoft Partnership',m:'Company',u:'/company/partnerships/microsoft/',g:'Company',i:'co'},
    {l:'Offshore Development Cost',m:'Guide',u:'/resources/guides/offshore-development-cost/',g:'Company',i:'co'},
    {l:'Programme',m:'Company',u:'/partners/programme/',g:'Company',i:'co'},
    {l:'React Development Project',m:'Case Study',u:'/case-studies/react-development-project/',g:'Company',i:'co'},
    {l:'Reviews',m:'Company',u:'/company/reviews/',g:'Company',i:'co'},
    {l:'Security',m:'Company',u:'/company/security/',g:'Company',i:'co'},
    {l:'Software Development Cost India',m:'Guide',u:'/resources/guides/software-development-cost-india/',g:'Company',i:'co'},
    {l:'Testimonials',m:'Company',u:'/company/testimonials/',g:'Company',i:'co'},
    {l:'Transparent Pricing',m:'Company',u:'/pricing/',g:'Company',i:'co'},
    {l:'ValueCoders Kubernetes vs Docker',m:'Company Â· Compare',u:'/resources/guides/kubernetes-vs-docker/',g:'Company',i:'co'},
    {l:'ValueCoders Microservices vs Monolith',m:'Company Â· Compare',u:'/resources/guides/microservices-vs-monolith/',g:'Company',i:'co'},
    {l:'ValueCoders Staff Augmentation vs Outsourcing',m:'Company Â· Compare',u:'/resources/guides/staff-augmentation-vs-outsourcing/',g:'Company',i:'co'},
    {l:'ValueCoders vs AI Coding Tools',m:'Company Â· Compare',u:'/company/vs-ai-coding-tools/',g:'Company',i:'co'},
    {l:'ValueCoders vs Agencies',m:'Company Â· Compare',u:'/company/vs-agencies/',g:'Company',i:'co'},
    {l:'ValueCoders vs Andela',m:'Company Â· Compare',u:'/company/vs-andela/',g:'Company',i:'co'},
    {l:'ValueCoders vs Big 4 Consulting',m:'Company Â· Compare',u:'/company/vs-big-4-consulting/',g:'Company',i:'co'},
    {l:'ValueCoders vs Freelancers',m:'Company Â· Compare',u:'/company/vs-freelancers/',g:'Company',i:'co'},
    {l:'ValueCoders vs In House',m:'Company Â· Compare',u:'/company/vs-in-house/',g:'Company',i:'co'},
    {l:'ValueCoders vs Nearshore',m:'Company Â· Compare',u:'/company/vs-nearshore/',g:'Company',i:'co'},
    {l:'ValueCoders vs Toptal',m:'Company Â· Compare',u:'/company/vs-toptal/',g:'Company',i:'co'},
    {l:'ValueCoders vs Turing',m:'Company Â· Compare',u:'/company/vs-turing/',g:'Company',i:'co'},
    {l:'ValueCoders vs Uplers',m:'Company Â· Compare',u:'/company/vs-uplers/',g:'Company',i:'co'},
    {l:'Webinars',m:'Company Â· Insights',u:'/webinars/',g:'Company',i:'co'},
    {l:'Why Valuecoders',m:'Company',u:'/company/why-valuecoders/',g:'Company',i:'co'},
  ];
  const CMDK_ICON = {
    ai:'<path d="M8 1.5l1.4 3.6L13 6.5l-3.6 1.4L8 11.5 6.6 7.9 3 6.5l3.6-1.4z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/><path d="M12.5 10.5l.6 1.6 1.6.6-1.6.6-.6 1.6-.6-1.6-1.6-.6 1.6-.6z" stroke="currentColor" stroke-width="1" stroke-linejoin="round"/>',
    box:'<rect x="2" y="4" width="12" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M5 4V3a2 2 0 012-2h2a2 2 0 012 2v1" stroke="currentColor" stroke-width="1.3"/>',
    data:'<ellipse cx="8" cy="4" rx="5" ry="2" stroke="currentColor" stroke-width="1.3"/><path d="M3 4v8c0 1.1 2.2 2 5 2s5-.9 5-2V4" stroke="currentColor" stroke-width="1.3"/>',
    cloud:'<path d="M4.5 12a3 3 0 01-.3-6 4 4 0 017.6-1 2.5 2.5 0 01.7 4.9" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
    erp:'<rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/>',
    mod:'<path d="M2 8a6 6 0 0110-4.5M14 8a6 6 0 01-10 4.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M12 2v3.5H8.5M4 14v-3.5h3.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>',
    sol:'<path d="M6 14l1-4-3-1 5-7-1 4 3 1z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>',
    scope:'<circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.3"/><circle cx="8" cy="8" r="1.5" fill="currentColor"/>',
    ind:'<path d="M2 14V7l4-2v3l4-2.5V14M2 14h12M10 14V5l4 2v7" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>',
    hire:'<circle cx="8" cy="5" r="2.5" stroke="currentColor" stroke-width="1.3"/><path d="M3 14a5 5 0 0110 0" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
    team:'<circle cx="5.5" cy="6" r="2" stroke="currentColor" stroke-width="1.2"/><circle cx="10.5" cy="6" r="2" stroke="currentColor" stroke-width="1.2"/><path d="M2 13a3.5 3.5 0 017 0M9 13a3.5 3.5 0 015-3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
    co:'<rect x="3" y="2" width="10" height="12" rx="1" stroke="currentColor" stroke-width="1.3"/><path d="M6 5h4M6 8h4M6 11h2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>'
  };

  const $ = s => document.querySelector(s);
  const $$ = s => [...document.querySelectorAll(s)];

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• MEGA PANELS â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  const nav = $('#nav'), scrim = $('#scrim');
  const triggers = $$('.trigger');
  const panels = $$('.panel');
  let openPanel = null, hoverTimer = null, closeTimer = null;
  const MOBILE = window.matchMedia('(max-width:960px)');

  function showPanel(id){
    if(MOBILE.matches) return;
    clearTimeout(closeTimer);
    if(openPanel === id) return;
    panels.forEach(p => p.classList.toggle('is-open', p.id === id));
    triggers.forEach(t => t.setAttribute('aria-expanded', String(t.dataset.panel === id)));
    scrim.classList.add('is-on');
    openPanel = id;
  }
  function hidePanel(){
    panels.forEach(p => p.classList.remove('is-open'));
    triggers.forEach(t => t.setAttribute('aria-expanded','false'));
    scrim.classList.remove('is-on');
    openPanel = null;
  }
  triggers.forEach(t => {
    const id = t.dataset.panel;
    t.addEventListener('mouseenter', () => { clearTimeout(hoverTimer); hoverTimer = setTimeout(() => showPanel(id), 90); });
    t.addEventListener('mouseleave', () => { clearTimeout(hoverTimer); closeTimer = setTimeout(hidePanel, 140); });
    t.addEventListener('click', e => { e.preventDefault(); openPanel === id ? hidePanel() : showPanel(id); });
    t.addEventListener('focus', () => showPanel(id));
    // keyboard: left/right between triggers
    t.addEventListener('keydown', e => {
      const i = triggers.indexOf(t);
      if(e.key === 'ArrowRight'){ e.preventDefault(); triggers[(i+1)%triggers.length].focus(); }
      else if(e.key === 'ArrowLeft'){ e.preventDefault(); triggers[(i-1+triggers.length)%triggers.length].focus(); }
      else if(e.key === 'Escape'){ hidePanel(); t.focus(); }
    });
  });
  panels.forEach(p => {
    p.addEventListener('mouseenter', () => clearTimeout(closeTimer));
    p.addEventListener('mouseleave', () => { closeTimer = setTimeout(hidePanel, 140); });
  });
  scrim.addEventListener('click', hidePanel);
  document.addEventListener('keydown', e => { if(e.key === 'Escape' && openPanel) hidePanel(); });
  // outside click
  document.addEventListener('click', e => {
    if(openPanel && !e.target.closest('.panel') && !e.target.closest('.trigger')) hidePanel();
  });

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• SCROLL SHADOW â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  // const sentinel = document.createElement('div');
  // sentinel.style.cssText = 'position:absolute;top:0;height:1px;width:1px';
  // document.body.prepend(sentinel);
  // new IntersectionObserver(([e]) => nav.classList.toggle('is-scrolled', !e.isIntersecting),
  //   {rootMargin:'-8px 0px 0px 0px'}).observe(sentinel);

  if (document.querySelector(".nav-v9")) {
    var lastScrollTop = 0;
    window.addEventListener("scroll", function () {
        window.pageYOffset > 10 ? document.querySelector(".nav-v9").classList.add("header-bg") : document.querySelector(".nav-v9").classList.remove("header-bg");
        let scrollST = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollST > lastScrollTop) {
            document.querySelector(".nav-v9").classList.remove("sc-up");
            document.querySelector(".nav-v9").classList.add("sc-down");
        } else {
            document.querySelector(".nav-v9").classList.remove("sc-down");
            document.querySelector(".nav-v9").classList.add("sc-up");
        }
        lastScrollTop = scrollST <= 0 ? 0 : scrollST;
    });
}

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• COMMAND PALETTE â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  const cmdk = $('#cmdk'), cInput = $('#cmdk-input'), cResults = $('#cmdk-results'), cEmpty = $('#cmdk-empty');
  let cActive = -1;

  function cmdkOpen(){
    hidePanel();
    cmdk.classList.add('is-on');
    document.body.style.overflow = 'hidden';
    cInput.value = '';
    cmdkRender('');
    setTimeout(() => cInput.focus(), 40);
  }
  function cmdkClose(){
    cmdk.classList.remove('is-on');
    document.body.style.overflow = '';
    cActive = -1;
  }
  function score(it, q){
    const l = it.l.toLowerCase(), m = it.m.toLowerCase();
    if(l === q) return 100;
    if(l.startsWith(q)) return 80;
    if(l.includes(q)) return 60;
    if(m.includes(q)) return 30;
    if(q.split(/\s+/).every(t => (l+' '+m).includes(t))) return 20;
    return 0;
  }
  function cmdkRender(q){
    q = q.toLowerCase().trim();
    cActive = -1;
    let matches = !q ? CMDK_INDEX.slice()
      : CMDK_INDEX.map(it => ({it, s:score(it,q)})).filter(x => x.s>0).sort((a,b) => b.s-a.s).map(x => x.it);
    while(cResults.firstChild) cResults.removeChild(cResults.firstChild);
    if(!matches.length){
      cResults.style.display = 'none'; cEmpty.style.display = 'block';
      $('#cmdk-empty-q').textContent = q; return;
    }
    cResults.style.display = ''; cEmpty.style.display = 'none';
    const groups = {};
    matches.forEach(it => { (groups[it.g] = groups[it.g] || []).push(it); });
    let idx = 0;
    Object.keys(groups).forEach(g => {
      const gh = document.createElement('div'); gh.className = 'cmdk__group'; gh.textContent = g;
      cResults.appendChild(gh);
      groups[g].forEach(it => {
        const a = document.createElement('a');
        a.className = 'cmdk__item'; a.href = it.u; a.setAttribute('role','option'); a.dataset.idx = idx;
        const ico = document.createElement('div'); ico.className = 'cmdk__ico';
        const svg = document.createElementNS('http://www.w3.org/2000/svg','svg');
        svg.setAttribute('viewBox','0 0 16 16'); svg.setAttribute('fill','none');
        svg.innerHTML = CMDK_ICON[it.i] || CMDK_ICON.co;  /* static trusted icon literals only */
        ico.appendChild(svg); a.appendChild(ico);
        const tx = document.createElement('div'); tx.className = 'cmdk__txt';
        const lbl = document.createElement('div'); lbl.className = 'cmdk__lbl';
        if(q){
          const qe = q.replace(/[-[\]{}()*+?.\\^$|]/g,'\\$&');
          it.l.split(new RegExp('('+qe+')','ig')).forEach(p => {
            if(p.toLowerCase() === q){ const mk = document.createElement('mark'); mk.textContent = p; lbl.appendChild(mk); }
            else if(p) lbl.appendChild(document.createTextNode(p));
          });
        } else lbl.textContent = it.l;
        const meta = document.createElement('div'); meta.className = 'cmdk__meta'; meta.textContent = it.m;
        tx.appendChild(lbl); tx.appendChild(meta); a.appendChild(tx);
        const go = document.createElement('span'); go.className = 'cmdk__go'; go.textContent = 'Enter â†µ';
        a.appendChild(go);
        a.addEventListener('mouseenter', () => setActive(parseInt(a.dataset.idx)));
        cResults.appendChild(a); idx++;
      });
    });
    setActive(0);
  }
  const items = () => $$('.cmdk__item');
  function setActive(i){
    const els = items(); if(!els.length) return;
    cActive = Math.max(0, Math.min(els.length-1, i));
    els.forEach((el,n) => el.classList.toggle('is-active', n === cActive));
    els[cActive].scrollIntoView({block:'nearest'});
  }
  cInput.addEventListener('input', () => cmdkRender(cInput.value));
  cInput.addEventListener('keydown', e => {
    const els = items();
    if(e.key === 'ArrowDown'){ e.preventDefault(); setActive(cActive+1); }
    else if(e.key === 'ArrowUp'){ e.preventDefault(); setActive(cActive-1); }
    else if(e.key === 'Enter'){ e.preventDefault(); if(els[cActive]) window.location.href = els[cActive].href; }
    else if(e.key === 'Escape'){ e.preventDefault(); cmdkClose(); }
  });
  $('[data-cmdk-close]').addEventListener('click', cmdkClose);
  const st = $('#search-trigger');
  st.addEventListener('click', cmdkOpen);
  st.addEventListener('keydown', e => { if(e.key === 'Enter' || e.key === ' '){ e.preventDefault(); cmdkOpen(); } });
  document.addEventListener('keydown', e => {
    if((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k'){ e.preventDefault(); cmdk.classList.contains('is-on') ? cmdkClose() : cmdkOpen(); }
  });
  document.addEventListener('vc:search-open', cmdkOpen);

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• MOBILE DRAWER â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  const hamb = $('#hamb'), drawer = $('#drawer'), drawerOv = $('#drawer-ov'), drawerClose = $('#drawer-close');
  function drawerOpen(){ drawer.classList.add('is-on'); drawerOv.classList.add('is-on'); hamb.classList.add('is-open');
    hamb.setAttribute('aria-expanded','true'); document.body.style.overflow = 'hidden'; }
  function drawerHide(){ drawer.classList.remove('is-on'); drawerOv.classList.remove('is-on'); hamb.classList.remove('is-open');
    hamb.setAttribute('aria-expanded','false'); document.body.style.overflow = ''; }
  hamb.addEventListener('click', () => drawer.classList.contains('is-on') ? drawerHide() : drawerOpen());
  drawerClose.addEventListener('click', drawerHide);
  drawerOv.addEventListener('click', drawerHide);
  $$('.acc').forEach(acc => {
    acc.addEventListener('click', () => {
      const body = document.getElementById(acc.dataset.acc);
      const open = acc.classList.toggle('is-open');
      acc.setAttribute('aria-expanded', String(open));
      body.classList.toggle('is-open', open);
    });
  });

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• VIEWPORT RESET â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  MOBILE.addEventListener('change', () => { hidePanel(); drawerHide(); });

  /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• SECTION-ACTIVE ON LOAD â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
  const path = window.location.pathname;
  const sectionMap = {'p-services':['/services/','/ai/','/data/','/cloud/','/iot/'],'p-solutions':['/solutions/'],
    'p-hire':['/hire/','/dedicated-teams/'],'p-company':['/company/','/case-studies/','/resources/','/blog/','/webinars/','/partners/','/pricing/','/contact/']};
  Object.keys(sectionMap).forEach(pid => {
    if(sectionMap[pid].some(pre => path.startsWith(pre))){
      const t = triggers.find(x => x.dataset.panel === pid);
      if(t) t.classList.add('is-section');
    }
  });
})();
# Lab Report 02: Stored Cross-Site Scripting (XSS) Assessment

## 📌 Overview
* **Vulnerability Type:** Stored Cross-Site Scripting (XSS)
* **Severity:** High / Critical
* **Target Environment:** Simulated Web Application / Client-Side Security Assessment
* **Tools Used:** Burp Suite, Browser Developer Tools, Payload Crafting Scripts

---

## 🔍 Description
Stored XSS occurs when a malicious script is injected directly into a target application's database (e.g., via a comment section, user profile, or feedback form). When other legitimate users or administrators load the affected page, the malicious script executes automatically in their browsers within the context of their session.

---

## 🛠️ Reproduction Steps
1. **Locate Input Vector:** Identified a user comment submission form lacking proper input sanitization and output encoding.
2. **Inject Payload:** Submitted a standard proof-of-concept payload into the comment field:
   ```html
   <script>alert(document.cookie);</script>

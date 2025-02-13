# Magento 2 Pre Select Shipping Payment Extension by BSS Commerce

[![License: OSI Approved :: Open Software License 3.0 (OSL-3.0)](https://img.shields.io/badge/License-OSL--3.0-blueviolet.svg)](https://opensource.org/licenses/OSL-3.0)
[![Magento 2 Compatible](https://img.shields.io/badge/Magento%202-Compatible-brightgreen.svg)](https://www.magento.com/)

**Streamline Checkout & Enhance Conversion Rates by Pre-Selecting Shipping & Payment Methods**

The **Magento 2 Pre Select Shipping Payment Extension by BSS Commerce** is designed to significantly improve the checkout process for your customers. By automatically pre-selecting default shipping and payment methods, you can reduce checkout friction, minimize cart abandonment, and ultimately boost your conversion rates.

## Key Features

*   **Automatic Pre-selection:** Intelligently pre-select default shipping and payment methods for customers based on predefined rules and conditions.
*   **Rule-Based Configuration:** Define flexible rules to determine which shipping and payment methods are pre-selected based on various criteria (e.g., customer groups, addresses, order totals).
*   **Customizable Display Options:** Control how pre-selected methods are displayed to customers during checkout, ensuring a seamless and user-friendly experience.
*   **Shipping Method Pre-selection:**  Automatically select the most suitable shipping method, streamlining shipping choices for customers.
*   **Payment Method Pre-selection:**  Recommend preferred payment options to customers, guiding them towards faster payment completion.
*   **Allow Customer Override:** Customers retain the flexibility to change the pre-selected shipping and payment methods if they prefer alternative options.
*   **Fallback Options:** Define default methods to be pre-selected when no specific rules are matched, ensuring a fallback pre-selection.

**[Backend Demo Luma](https://disable-compare.demom2.bsscommerce.com/admin/admin/system_config/edit/section/preselectshippingpayment/key/1c445ac76eabbbf913429409f304258341a8f981280d96a6d7c2a6dfa44a7313/)** | **[Frontend Demo Luma](https://disable-compare.demom2.bsscommerce.com/)**

**Full Feature List of M2 Pre-select Shipping Payment Extension**: *[https://bsscommerce.com/magento-2-preselect-shipping-payment-extension.html](https://bsscommerce.com/magento-2-preselect-shipping-payment-extension.html)*

## Benefits

*   **Enhanced Checkout Speed:** Reduce the number of steps and clicks required during checkout, leading to a faster and more efficient process.
*   **Reduce Cart Abandonment:**  A simplified checkout process with pre-selected options reduces friction and minimizes reasons for customers to abandon their carts.
*   **Increase Conversion Rates:**  Faster and easier checkout leads to a higher percentage of completed orders and improved conversion metrics.
*   **Improved Customer Experience:** Simplify the checkout journey by guiding customers with recommended shipping and payment options, minimizing confusion and hesitation.
*   **Admin-Friendly Interface:** Easily configure and manage pre-selection rules and settings through an intuitive Magento admin panel.

## Installation

**Step 1: Download the Extension**

Purchase or download the Magento 2 Pre-Select Shipping & Payment extension package from the BSS Commerce website.
Extract the downloaded file on your local system.

**Step 2: Upload the Extension Files**

Upload the extracted folder to your Magento root directory:
```bash
app/code/Bss/PreSelectShippingPayment
```

**Step 3: Run Magento Commands**

Access your server via SSH and navigate to your Magento root folder.

Execute the following commands to install and activate the extension:
```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Step 4: Verify Installation**

Log in to your Magento Admin Panel.

Go to **Stores → Configuration → BSS Commerce → Pre-Select Shipping & Payment** to check if the extension appears in the settings.

## Frequently Asked Questions (FAQ)

**Question 1: "What criteria can be used to set up the automatic pre-selection of shipping and payment methods?"**

**Answer:**

The Magento 2 Pre-Select Shipping & Payment extension allows store administrators to configure automatic pre-selection of shipping and payment methods based on the following criteria:

**Default Method Configuration:** Administrators can specify a particular shipping and payment method to be automatically selected during the checkout process. 

**Method Availability and Position:** If the pre-selected method is unavailable, the extension can automatically select the next available method based on its position in the configuration settings.

**Question 2: "Can customers change the pre-selected shipping and payment methods?"**

**Answer:**

Yes, this module *only pre-selects* methods as suggestions to streamline the checkout process. Customers **have full freedom to change** and choose different shipping and payment methods if they prefer during checkout.

**Question 3: "Is this module compatible with all existing Magento 2 shipping and payment methods?"**

**Answer:**

The **Magento 2 Pre Select Shipping Payment Extension** is designed to be compatible with **[most standard Magento 2 shipping and payment methods](https://bsscommerce.com/magento-2-shipping-and-payment-method-per-customer-group-extension.html)**. However, to ensure optimal compatibility with specific or custom shipping and payment methods, you should:

*   Check the list of supported methods (if available) in the module's documentation.
*   Thoroughly test on your website after installation.
*   Contact the module vendor for support if you encounter any compatibility issues.


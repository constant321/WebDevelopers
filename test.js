const webdriver = require("selenium-webdriver");
const chrome = require("selenium-webdriver/chrome");
const { By } = require("selenium-webdriver");

const test = async () => {
    const driver = new webdriver.Builder()
        .forBrowser("chrome")
        .setChromeOptions(new chrome.Options().headless())
        .build();

    try {
        console.log("Test 1: Admin Login");
        await driver.get("http://localhost:8000/admin/login");
        await driver.findElement(By.name("user")).sendKeys("admin");
        await driver.findElement(By.name("pass")).sendKeys("password");
        await driver.findElement(By.tagName("form")).submit();
        await driver.wait(webdriver.until.titleIs("Admin Page"), 5000);
        const adminPageTitle = await driver.getTitle();
        console.log(adminPageTitle === "Admin Page" ? "PASS" : "FAIL");

        console.log("Test 2: Edit Blog");
        await driver.get("http://localhost:8000/edit/1");
        await driver.findElement(By.name("name")).sendKeys("Updated Blog Name");
        await driver
            .findElement(By.name("description"))
            .sendKeys("Updated Blog Description");
        await driver.findElement(By.tagName("form")).submit();
        await driver.wait(webdriver.until.titleIs("Admin Page"), 5000);
        const updatedBlogName = await driver
            .findElement(By.id("blog-name-1"))
            .getText();
        const updatedBlogDescription = await driver
            .findElement(By.id("blog-description-1"))
            .getText();
        console.log(updatedBlogName === "Updated Blog Name" ? "PASS" : "FAIL");
        console.log(
            updatedBlogDescription === "Updated Blog Description"
                ? "PASS"
                : "FAIL"
        );

        console.log("Test 3: Delete Blog");
        await driver.get("http://localhost:8000/delete/2");
        await driver.wait(webdriver.until.titleIs("Admin Page"), 5000);
        const deletedBlog = await driver.findElements(By.id("blog-2"));
        console.log(deletedBlog.length === 0 ? "PASS" : "FAIL");
    } catch (error) {
        console.log("Error: " + error);
    } finally {
        await driver.quit();
    }
    console.log("Test : 4 Authenticated user")

    before(async function () {
        driver = await new Builder().forBrowser("chrome").build();
    });

    after(async function () {
        await driver.quit();
    });

    it("should authenticate with valid credentials", async function () {
        const user = "admin";
        const pass = "password";

        await driver.get("http://localhost/admin-login");

        await driver.findElement(By.name("user")).sendKeys(user);
        await driver.findElement(By.name("pass")).sendKeys(pass);
        await driver.findElement(By.className("form")).submit();

        const currentUrl = await driver.getCurrentUrl();
        assert.strictEqual(currentUrl, "http://localhost/Admin");
    });

    it("should display error message with invalid credentials", async function () {
        const user = "admin";
        const pass = "wrongpassword";

        await driver.get("http://localhost/admin-login");

        await driver.findElement(By.name("user")).sendKeys(user);
        await driver.findElement(By.name("pass")).sendKeys(pass);
        await driver.findElement(By.className("form")).submit();

        const errorMessage = await driver
            .findElement(By.id("error-message"))
            .getText();
        assert.strictEqual(errorMessage, "Password does not match");
    });

    it("should display error message with invalid username", async function () {
        const user = "nonexistentuser";
        const pass = "password";

        await driver.get("http://localhost/admin-login");

        await driver.findElement(By.name("user")).sendKeys(user);
        await driver.findElement(By.name("pass")).sendKeys(pass);
        await driver.findElement(By.tagName("form")).submit();

        const errorMessage = await driver
            .findElement(By.id("error-message"))
            .getText();
        assert.strictEqual(errorMessage, "Username not Found.");
    });
    console.log("Test case # 5 Blog Create")

    describe("Blog Creation Test", function () {
        let driver;

        before(async function () {
            driver = await new Builder().forBrowser("chrome").build();
        });

        after(async function () {
            await driver.quit();
        });

        it("should create a new blog", async function () {
            await driver.get("http://localhost/blogs/create");

            const blogNameInput = await driver.findElement(
                By.name("blog_name")
            );
            await blogNameInput.sendKeys("Test Blog");

            const blogDescInput = await driver.findElement(
                By.name("blog_description")
            );
            await blogDescInput.sendKeys("This is a test blog");

            const submitButton = await driver.findElement(
                By.xpath('//button[@type="submit"]')
            );
            await submitButton.click();

            // Wait for the success message to appear
            await driver.wait(
                until.elementLocated(By.className("alert-success")),
                5000
            );

            const successMessage = await driver
                .findElement(By.className("alert-success"))
                .getText();
            assert.strictEqual(successMessage, "Blog created successfully.");

            // You can add additional assertions to verify the created blog's details, e.g., checking if it appears in the blog list
            // Use appropriate locators to find the elements on your website
        });
    });

};

// Run the test case
test();

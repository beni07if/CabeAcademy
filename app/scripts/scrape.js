const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto('https://organic.ams.usda.gov/integrity'); // Ganti URL dengan URL website Blazor yang ingin Anda scrape
    const title = await page.$eval('h1', element => element.textContent);
    await browser.close();
    console.log(title);
})();

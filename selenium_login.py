from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

driver = webdriver.Chrome()

driver.maximize_window()
driver.get("http://127.0.0.1:8000/login")

wait = WebDriverWait(driver, 10)

email = wait.until(
    EC.visibility_of_element_located((By.ID, "email"))
)

password = driver.find_element(By.ID, "password")

email.send_keys("random@test.com")
password.send_keys("123456")

# 5 seconds tak browser khula rahe
time.sleep(5)

driver.quit()
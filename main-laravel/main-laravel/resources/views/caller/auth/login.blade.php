from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()

driver.maximize_window()
driver.get("http://127.0.0.1:8000/login")

time.sleep(2)

driver.find_element(By.ID, "username").send_keys("randomuser")
driver.find_element(By.ID, "password").send_keys("123456")

time.sleep(5)

driver.quit()
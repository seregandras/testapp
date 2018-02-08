package com.sereg.test.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.sereg.test.model.UserModel;
import com.sereg.test.repo.UserRepository;

@Controller
public class UserController {
	
	@Autowired
	UserRepository userRepo;
	
	@GetMapping(value = "/users", produces = MediaType.APPLICATION_JSON_VALUE)
	public String getAll(Model model) {
		List<UserModel> list = new ArrayList<>();
		Iterable<UserModel> users = userRepo.findAll();
		model.addAttribute("users", users);
		users.forEach(list::add);
		return "user";
	}

}

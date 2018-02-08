package com.sereg.test.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.sereg.test.model.AdvertisementModel;
import com.sereg.test.repo.AdvertisementRepository;

@Controller
public class AdvertisementController {
	
	@Autowired
	AdvertisementRepository adverRepo;
	
	@GetMapping(value = "/ads", produces = MediaType.APPLICATION_JSON_VALUE)
	public String getAll(Model model) {
		List<AdvertisementModel> list = new ArrayList<>();
		Iterable<AdvertisementModel> ads = adverRepo.findAll();
		model.addAttribute("ads", ads);
		ads.forEach(list::add);
		return "ad";
	}


}

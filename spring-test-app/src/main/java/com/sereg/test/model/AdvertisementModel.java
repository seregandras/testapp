package com.sereg.test.model;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name = "advertisements")
public class AdvertisementModel implements Serializable {
	
	private static final long serialVersionUID = 5544493274891449887L;

	@Id
	@GeneratedValue
	private long id;

	@OneToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "user_id", nullable = false)
    private UserModel userModel;
	
	@Column(name = "title")
	private String title;

	protected AdvertisementModel() {
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}


//	public UserModel(String name) {
//		this.name = name;
//	}
//
//	public String toString() {
//		return String.format("User[id=%d, name=%s']", id, name);
//	}

}
